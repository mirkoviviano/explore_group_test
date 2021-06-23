
# Technical Test

#### Objective
To demonstrate your HTML5, CSS3 and JavaScript (jQuery) skills.\
To demonstrate your understanding of REST and SOAP APIs.\
To demonstrate your front-end and design skills.\
Pay attention to the details, looks aren’t everything, but they help.

## Deploy
The app has been deployed on [Heroku](https://exploretestmirko.herokuapp.com).

## Cloning
To clone the repository, open the Terminal and type
```
git clone https://github.com/mirkoviviano/explore_group_test
```

## Usage
To start the app, go inside the folder and start the webserver as follows
```
cd explore_group_test 
php -S localhost:9000
```
#### Notes
The apis.php file contains the `DbConnection` class for the connection to the database. For the development of this app, [remotemysql.com](https://remotemysql.com/) has been used. The SQL file is attached to the file structure and can be uploaded using [phpMyAdmin](https://docs.phpmyadmin.net/en/latest/import_export.html). \
Once imported, go to the `apis.php` file and change the connection details at line @ 16. 


## Directory Structure
```
    .                               # app root folder
    ├── css                         # CSS folder
    │   ├── owl-styles.css          # carousel CSS styles   
    │   ├── styles.css              # main CSS styles
    ├── helpers                      
    │   ├── apis.php                # APIs file           
    ├── js                         
    │   ├── main.js                 # main JavaScript functions file
    ├── partials                       
    │   ├── header.php              # app header
    │   ├── footer.php              # app footer
    ├── README.md                  
    ├── index.php                 
    ├── page2.php          
    ├── database.sql                # the SQL dump to import via phpMyAdmin
    └──                              
```