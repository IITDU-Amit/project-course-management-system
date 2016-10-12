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
                        <button class="btn btn-ins btn-lg" onclick="login()">Login</button>
                        <br>
                        <br>
                        <fieldset class="form-group">
                            <a href="#">Forget password?</a>
                        </fieldset>
                    </div>

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

    <script type="text/javascript">
        function login(){

            var email = $('#email').val();
            var password = $('#password').val();

            $.post("http://localhost:8080/cms/header/logincheck.php", {email:email,password:password}, function(result){
                if(result=="Logged in"){
                  window.location.replace("http://localhost:8080/cms/"); 
                }
                else{
                  alert("Sorry. Invalid username or password");
                }
                
              });

        }
    </script>


</body>

</html>
