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

<body class="fixed-sn blue-skin index-body">

    <?php

        session_start();

        if (!isset($_SESSION['login_id'])) {
            header ("Location: http://localhost:8080/cms/login.php");
        }

    ?>

    <?php

        include 'connect/connect.php';
        include 'header/header.php';

    ?>


    <div id="changepassword" class="contaner-fluid">
        <div class="col-sm-6">
            <!--Form-->
            <div class="card">
                <div class="card-block">
                    <!--Header-->
                    <div class="text-xs-center">
                        <h3>Change Password</h3>
                        <hr>
                    </div>

                    <!--Body-->
                    <div class="md-form">
                        <input type="password" id="old_password" class="form-control">
                        <label for="old_password">Old password</label>
                    </div>

                    <div class="md-form">
                        <input type="password" id="new_password" class="form-control">
                        <label for="new_password">New password</label>
                    </div>

                    <div class="md-form">
                        <input type="password" id="confirm_password" class="form-control">
                        <label for="confirm_password">Confirm password</label>
                    </div>

                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-success btn-lg" onclick="changePassword()">Confirm</button>
                    </div>

                </div>
            </div>
            <!--/.Form-->
        </div>
    </div>



    <!--Footer-->
    <footer class="my-footer container-fluid">

        <!--Copyright-->
            <div class="flex-center">
                © 2016 Copyright - IITDU
            </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


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

    <!-- Validator Js -->
    <script type="text/javascript" src="js/validator.js"></script>


    <script type="text/javascript">

        function changePassword(){

            var old_password = $('#old_password').val();
            var new_password = $('#new_password').val();
            var confirm_password = $('#confirm_password').val();

            var validation = change_password_validation(old_password, new_password, confirm_password);

            if(validation!=true){

                toastr.info(validation);
                return false;    
            }

            $.post("header/changepassword.php", {old_password:old_password,new_password:new_password,confirm_password:confirm_password}, function(result){
                
                    toastr.info(result);
                
            });
            

        }
    </script>


</body>

</html>
