<?php
/**
 * A simple class to connect to the SQL database
 */ 

Class DbConnection{
    /**
     * Connects to the database
     * 
     * @throws Couldt_connect Error if connection is not established.
     * @author Mirko Viviano
     * @return connection
     */ 

    function connect(){
        $conn = mysqli_connect("remotemysql.com:3306","OiFSvEuH1e","kLrzhOqtJ3","OiFSvEuH1e") or die("Couldn't connect");
        return $conn;
    }
}

/**
 * A simple APIs class. 
 * This class is a helper class for email checks and user registration processes. 
 */     
class APIS{
    private $mysql;
     /**
     * Enables the connection to the database using the above class.
     * 
     * @throws Couldt_connect Error if connection is not established.
     * @author Mirko Viviano
     * @return connection
     */ 
    function __construct() {
        $database       = new DbConnection();
        $this->mysql    = $database->connect(); 
    }

    /**
     * This function saves a given action into the log, whether it is successful or not.
     * 
     * @param string $referenceID: the refence number for the log event
     * @param string $action: the action saved in the log
     * 
     * @return bool true: saved
     * @return bool false: not saved
     */
    function logEvent($statusCode, $referenceID, $action){
        $now = date("Y-m-d H:i:s");     // 2021-06-23 00:00:00 (MySQL DATETIME format)
        $saveEvent = mysqli_query($this->mysql, "INSERT INTO explore_log (`statusCode`, `referenceID`, `datetime`, `action`) VALUES ('$statusCode', '$referenceID', '$now', '$action')");
        
        return $saveEvent;
    }

    /**
     * This function retrieves all the logs from the database.
     * 
     * @return array rows: list of all logs
     */
    function getLogs(){
        $saveEvent = mysqli_query($this->mysql, "SELECT * FROM explore_log");

        $rows = array();
        while($r = mysqli_fetch_array($saveEvent)) {
            $rows[] = $r;
        }
        return json_encode($rows);
    }

     /**
     * Check if email is alredy database
     * 
     * @param string $emailAddress
     * 
     * @author Mirko Viviano
     * @return int rowCount: the number of rows. rows > 0 means the email is already contained in the database.
     */ 
    function checkEmail($emailAddress){
        $checkEmail = mysqli_query($this->mysql, "SELECT * FROM users WHERE email = '$emailAddress'");

        $rowcount = mysqli_num_rows($checkEmail);

        return $rowcount;
    }

    /**
     * The user's information are the function's parameters. registerUser performs basic checks on the 
     * fullName and emailAddress. It also hashes the password using MD5().
     * If user is successfully registered, it send a confirmation email to the user and admin.
     *
     * @param string $fullName:  first and last name of the user
     * @param string $emailAddress: email address of the user
     * @param string $password: user's password in plaintext
     * 
     * @author Mirko Viviano
     * @return array ER1001 - Email already in database
     * @return array ER1002 - MySQL error
     * @return array ER1003 - Account registered but problem sending email
     * @return array ER1004 - Wrong email format
     * 
     * @return array SC2001 - User successfully registered
     */ 
    function registerUser($fullName, $emailAddress, $password){

        /**
        * mysqli_real_escape_string(): Escapes special characters in a string for use in an SQL statement
        * more info: https://www.php.net/manual/en/mysqli.real-escape-string.php
        * */ 
        $fullName       = mysqli_real_escape_string($this->mysql, $fullName);
        $emailAddress   = mysqli_real_escape_string($this->mysql, $emailAddress);
        // md5(): hashes the plaintext
        $password       = md5($password); 

        /**
        * Check email format
        * more info: https://www.php.net/manual/en/filter.filters.validate.php
        **/
        if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
            $referenceID = strtoupper(substr(md5($emailAddress.rand(0,100)), 0, 5));
            return json_encode(
                array(
                    [
                        'status_code' => 'ER1004',
                        'status_msg'  => 'The email you entered is not in the correct format.',
                        'status_log'  => $this->logEvent("ER1004", $referenceID, "Wrong format email")
                    ]
                )
            );
        }

        /**
        * Check email in database
        * more info: @ line 39
        **/
        if($this->checkEmail($emailAddress) > 0):
            $referenceID = strtoupper(substr(md5($emailAddress.rand(0,100)), 0, 5));
            return json_encode(
                    array(
                        [
                            'status_code' => 'ER1001',
                            'status_msg'  => 'This email is already in our database.',
                            'status_log'  => $this->logEvent("ER1001", $referenceID, "Email already in database")
                        ]
                    )
                );
        else:
            /**
             * Prepare and execute INSERT query
             *  */ 
            $addUser = mysqli_query($this->mysql, "INSERT INTO users (`fullName`, `email`, `password`) VALUES ('$fullName', '$emailAddress', '$password')");
        
            if($addUser){
                // The INSERT is successful, therefore send email to user and admin

                $subject = 'Your successfully registered.'; // email subject

                $headers = "From:  no-reply@somedomain.it\r\n"; // some standard email
                $headers .= "Reply-To: no-reply@somedomain.it\r\n"; // some standard email
                $headers .= "BCC: info@mirkoviviano.it\r\n"; // bcc so doesn't appear in the email header at the user's end
                $headers .= "MIME-Version: 1.0\r\n"; // setting the MIME validate
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; // setting the content-Type

                /**
                 * Some HTML to write a table with the user's details
                 */
                $message = '<html><body>'; 
                $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $fullName . "</td></tr>";
                $message .= "<tr><td><strong>Email:</strong> </td><td>" . $emailAddress . "</td></tr>";
                $message .= "<tr><td><strong>Password:</strong> </td><td>The one you chose upon registration.</td></tr>";
                $message .= "</table>";
                $message .= "</body></html>";
                
                /**
                 * Send email with standard PHP mail() function
                 * more info: https://www.php.net/manual/en/function.mail.php
                 */
                $sendMail = mail($emailAddress, $subject, $message, $headers);

                if($sendMail):
                    $referenceID = strtoupper(substr(md5($emailAddress.rand(0,100)), 0, 5));
                    // The send was successful, account successfully registered
                    return json_encode(
                            array(
                                [
                                    'status_code' => 'SC2001',
                                    'status_msg'  => 'Account successfully registered.',
                                    'status_log'  => $this->logEvent("SC2001", $referenceID, "Account registered successfully")
                                ]
                            )
                        );
                else: 
                    $referenceID = strtoupper(substr(md5($emailAddress.rand(0,100)), 0, 5));
                    // The email could not be sent, return error
                    return json_encode(
                        array(
                            [
                                'status_code' => 'ER1003',
                                'status_msg'  => 'Your account has been registered but the confirmation email was not sent.',
                                'status_log'  => $this->logEvent("ER1003", $referenceID, "Account registered, email failed.")
                            ]
                        )
                    );
                endif;

            }
            else{
                $referenceID = strtoupper(substr(md5($emailAddress.rand(0,100)), 0, 5));
                // there has been a problem while adding the user into the database
                return json_encode(
                        array(
                            [
                                'status_code' => 'ER1002',
                                'status_msg'  => mysqli_error($this->mysql),
                                'status_log'  => $this->logEvent("ER1002", $referenceID, mysqli_error($this->mysql))
                            ]
                        )
                    );
            }
        endif;
    }
}

// initialise APIS class
$apis = new APIS();

/**
 * Retrieve HTTP POST request, if matches with the correct action of registerUser,
 * calls the api for registering the user.
 * 
 * @param $_POST HTTP POST request containing 
 *              string action     the action
 *              string fullName   the user's first and last name
 *              string email      the user's email address
 *              string password   the user's passowrd in plaintext 
 * 
 * @return array status_code : the status code
 *               status_msg  : the status message
 *               status_log  : the status has been logged in the database
 * 
 */

if(isset($_POST['action']) && $_POST['action'] == 'registerUser'){
    // the password is sent in plaintext but it won't be a problem if the system is used over HTTPS protocol
    // or if a csrf_token is implemented.
    echo $apis->registerUser($_POST['fullName'], $_POST['email'], $_POST['password'] );
}

/**
 * Retrieve the HTTP POST request, if matches with the correct action of getLogs, 
 * calls the api for obtaining all the logs.
 * 
 * @param $_POST HTTP POST request containing
 *              string action the action
 * 
 * @return array logs
 */

if(isset($_POST['action']) && $_POST['action'] == 'getLogs'){
    // the password is sent in plaintext but it won't be a problem if the system is used over HTTPS protocol
    // or if a csrf_token is implemented.
    echo $apis->getLogs();
}
?>