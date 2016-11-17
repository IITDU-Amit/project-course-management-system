<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | IITDU</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- CSS -->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body class="fixed-sn blue-skin">

    <?php

        session_start();

        if(isset($_SESSION['login_id'])){
            header("location: http://localhost:8080/cms/");
        }

    ?>

    <div id="login" class="contaner-fluid">
        <div class="col-sm-6">
            <!--Form-->
            <div class="card">
                <div class="card-block">
                    <!--Header-->
                    <div class="text-xs-center">
                        <h3>Please Login</h3>
                        <hr>
                    </div>

                    <!--Body-->

                    <form id="login_form">

                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="email" class="form-control" name="email">
                            <label for="email">Email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="password" class="form-control" name="password">
                            <label for="password">Password</label>
                        </div>

                        <div class="text-xs-center">
                            <button type="submit" class="btn btn-ins btn-lg" onclick="login()">Login</button>
                            <br>
                            <br>
                            <fieldset class="form-group">
                                <a href="http://localhost:8080/cms/forgot_password.php">Forget password?</a>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
            <!--/.Form-->
        </div>
    </div>


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Jquery Preloader Plugin -->
    <script type="text/javascript" src="js/jquery.preloader.min.js"></script>

    <!-- Header and Preloader Js -->
    <script type="text/javascript" src="js/header.js"></script>

    <!-- Validator -->
    <script type="text/javascript" src="js/validator.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#login_form').submit(function(e){
                e.preventDefault();
            });
        });

        function login(){

            var email = $('#email').val();
            var password = $('#password').val();

            var validation = login_form_validation(email,password);

            if(validation==true){

                $.post("header/logincheck.php", {email:email,password:password}, function(result){
                    if(result=="Logged in"){
                      window.location.replace("http://localhost:8080/cms/"); 
                    }
                    else{
                      toastr.info("Sorry. Invalid username or password");
                    }
                    
                  });    
            }

            else {

                toastr.info(validation);
            }
            

        }
    </script>


</body>

</html>
