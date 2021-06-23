<?php 
    // import header file
    include("partials/header.php");
?>

<!-- 
    Building the DOM for the homepage 
        - the carousels are built using jQuery in /js/main.js file
-->
<div class="container-fluid">
    <!-- Create container for each location: Harrington -->
    <div class="row carouselItem">
        <div class="col-lg-6 col-md-6 col-xs-12 location_carousel">
            <div id="harrington" class="owl-carousel nopadding"></div>            
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 location_title">
            <h1>Harrington</h1>
        </div>
    </div>
    <!-- Create container for each location: Cornwall -->
    <div class="row carouselItem">
        <div class="col-lg-6 col-md-6 col-xs-12 location_title">
            <h1>Cornwall</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 location_carousel">
            <div id="cornwall" class="owl-carousel nopadding"></div>            
        </div>
    </div>
    <!-- Create container for each location: Southwell -->
    <div class="row carouselItem">
        <div class="col-lg-6 col-md-6 col-xs-12 location_carousel">
            <div id="southwell" class="owl-carousel nopadding"></div>            
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 location_title">
            <h1>Southwell</h1>
        </div>
    </div>
    <!-- Create container for each location: Mews -->
    <div class="row carouselItem">
        <div class="col-lg-6 col-md-6 col-xs-12 location_title">
            <h1>Mews</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 location_carousel">
            <div id="mews" class="owl-carousel nopadding"></div>            
        </div>
    </div>
    <!-- Create container for each location: Kensington -->
    <div class="row carouselItem">
        <div class="col-lg-6 col-md-6 col-xs-12 location_carousel">
            <div id="kensington" class="owl-carousel nopadding"></div>            
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 location_title">
            <h1>Kensington</h1>
        </div>
    </div>
    <!-- Create container for each location: Tourist -->
    <div class="row carouselItem">
        <div class="col-lg-6 col-md-6 col-xs-12 location_title">
            <h1>Tourist</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 location_carousel">
            <div id="tourist" class="owl-carousel nopadding"></div>            
        </div>
    </div>
    <!-- Create container for each location: Apartments -->
    <div class="row carouselItem">
        <div class="col-lg-6 col-md-6 col-xs-12 location_carousel">
            <div id="apartments" class="owl-carousel nopadding"></div>            
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 location_title">
            <h1>Apartments</h1>
        </div>
    </div>

</div>
   
<?php 
    // include footer file
    include("partials/footer.php"); 
?>