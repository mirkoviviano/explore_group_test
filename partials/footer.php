    <div class="container-fluid nopadding footer-wrapper">
        <div class="row">
            <div class="col-lg-10 footer">
                <h3>Register</h3>
                <!-- Registration form -->
                <form action="#" method="post" id="registrationForm">
                    <div class="row theform">
                        <div class="col-lg-6">
                            <!-- Best practice: label + input -->
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" aria-describedby="fullNameHelper" required>
                        </div>
                        <div class="col-lg-6">
                            <!-- Best practice: label + input -->
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="row theform">
                        <div class="col-lg-6">
                            <!-- Best practice: label + input -->
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="col-lg-6">
                            <!-- Best practice: label + input -->
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 submitForm">
                            <button type="submit" class="btn btn-light btn-lg">Register</button>
                        </div>
                        <div class="col-lg-10 formMessage">
                            <div id="registered"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
    
    <!-- Required and custom JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js"></script>
    <script src="https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
    
    <!-- Core JS file -->
    <script type="text/javascript" src="../js/main.js"></script>
  </body>
</html>