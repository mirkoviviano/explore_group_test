/**
 * This is the core file for the jQuery functions.
 * On page ready it will instantiate the owlCarousel class which 
 * creates the single owlCarousel element with some params.
 * More details here: https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html
 * 
 * The images for the carousel are fetched using AJAX GET calls. 
 */
$(document).ready(function() {

    var maxItemPerCarousel = 5; // choose the maximum number of elements. Please note, is the same for every carousel.

    // build the carousel for Harrington
    $("#harrington").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500
    });

    // build the carousel for Cornwall
    $("#cornwall").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500
    });

    // build the carousel for Southwell
    $("#southwell").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500
    });

    // build the carousel for Mews
    $("#mews").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500
    });
    
    // build the carousel for Kensington
    $("#kensington").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500
    });

    // build the carousel for Tourist
    $("#tourist").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500
    });

    // build the carousel for Apartments
    $("#apartments").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500
    });

    // AJAX calls to retrieve photos
    $.ajax({ 
        type: 'GET', 
        url: 'https://jsonplaceholder.typicode.com/photos', 
        dataType: 'json',
        success: function(data) { 
            /**
             * The success callback will be called when the GET request is successful. Here, the data variable - in which all the JSON data from the call are stored - will be sliced based on the maxItemPerCarousel chosen above.
             */
            $.each(data.slice(0, maxItemPerCarousel), function() {
                // randomData is a random index that will be used to obtain the image url and title randomly for every single carousel.
                // this value has be calculate again before each carousel
                var randomData = data[Math.floor(Math.random() * data.length)];
                // build the div containing the image url and the image title
                var img = '<div class="owl-slide" style="background-image:url('+randomData.url+')"><div class="owl--text">'+ randomData.title +'</div></div>';
                // send the above data to owlCarousel
                $("#harrington").data('owlCarousel').addItem(img,[0]);

                // generate random number
                randomData = data[Math.floor(Math.random()*data.length)];
                // build the div containing the image url and the image title
                var img = '<div class="owl-slide" style="background-image:url('+randomData.url+')"><div class="owl--text">'+ randomData.title +'</div></div>';
                // send the above data to owlCarousel
                $("#cornwall").data('owlCarousel').addItem(img,[0]);

                // generate random number
                randomData = data[Math.floor(Math.random()*data.length)];
                // build the div containing the image url and the image title
                var img = '<div class="owl-slide" style="background-image:url('+randomData.url+')"><div class="owl--text">'+ randomData.title +'</div></div>';
                // send the above data to owlCarousel
                $("#southwell").data('owlCarousel').addItem(img,[0]);

                // generate random number
                randomData = data[Math.floor(Math.random()*data.length)];
                // build the div containing the image url and the image title
                var img = '<div class="owl-slide" style="background-image:url('+randomData.url+')"><div class="owl--text">'+ randomData.title +'</div></div>';
                // send the above data to owlCarousel
                $("#mews").data('owlCarousel').addItem(img,[0]);

                // generate random number
                randomData = data[Math.floor(Math.random()*data.length)];
                // build the div containing the image url and the image title
                var img = '<div class="owl-slide" style="background-image:url('+randomData.url+')"><div class="owl--text">'+ randomData.title +'</div></div>';
                // send the above data to owlCarousel
                $("#kensington").data('owlCarousel').addItem(img,[0]);

                // generate random number
                randomData = data[Math.floor(Math.random()*data.length)];
                // build the div containing the image url and the image title
                var img = '<div class="owl-slide" style="background-image:url('+randomData.url+')"><div class="owl--text">'+ randomData.title +'</div></div>';
                // send the above data to owlCarousel
                $("#tourist").data('owlCarousel').addItem(img,[0]);

                // generate random number
                randomData = data[Math.floor(Math.random()*data.length)];
                // build the div containing the image url and the image title
                var img = '<div class="owl-slide" style="background-image:url('+randomData.url+')"><div class="owl--text">'+ randomData.title +'</div></div>';
                // send the above data to owlCarousel
                $("#apartments").data('owlCarousel').addItem(img,[0]);
            });
        }
    });

    /**
     * AJAX request to retrieve all the logs saved in the database as soon as the page is ready.
     * In the success callback function, jQuery creates an instance of the object ID #logTable
     * and parses the stringify version of the data obtained through the PHP API.
     * At this point, the bootstrap table is popuated using the JSON data and jQuery.
     * The table will change accordingly to the data. To add more fields, check the HTML
     * in page2.php
     */
    $.ajax({ 
        type: 'POST', 
        url: '../helpers/apis.php', 
        dataType: 'json',
        data: "action=getLogs",
        success: function(data) {
            var table = $("#logTable");
            data = JSON.parse(JSON.stringify(data));    
            table.bootstrapTable({
                data: data
            });
        }
    });
   
});

/**
 * User registration function
 * Upon submission of the registration form, this function will retrieve the information from the form and fill perform
 * a AJAX request to the ../helpers/apis.php file to perform user registration
 * 
 */
$('#registrationForm').on('submit', function(e) {
    e.preventDefault();  
    var postForm = { 
        // action param needed to call the right api.
        'action'                : 'registerUser',

        'fullName'              : $("#fullName").val(),
        'email'                 : $("#emailAddress").val(),
        'password'              : $("#password").val(),
        'confirmPassword'       : $("#confirmPassword").val(), 
    };

    /**
     *  if the value of the input field "password" is not equal to the value of the input field "confirmPassword"
     *  an error is triggered. Otherwise it will send the POST request to the ../helpers/apis.php file.
     */
    if($("#password").val() == $("#confirmPassword").val()){
        $.ajax({
            url: '../helpers/apis.php',
            type: 'post',
            data: postForm,
            success: function(response){
                /**
                 * The callback function returns the status of the API call. 
                 * The response is JSON parsed to cast it into an array.
                 */
                response = JSON.parse(response);
                $("#registered").html(response[0].status_msg);
            }
        });

    }
    else{
        // If the passwords don't match, just return some message.
        $("#registered").html("The two passwords you entered are not matching.");
        $("#registered").fadeIn();
    }
});