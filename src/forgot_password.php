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
                    
                    <div id="email_submission">
                        
                    
                    <div class="text-xs-center">
                        
                        <h4>Enter your email address and submit</h4>
                        <hr>
                    </div>

                    <div class="row">

                        <div class="col-sm-8">
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="email" id="email" class="form-control" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="text-xs-center">
                                <button type="submit" class="btn btn-ins btn-lg" onclick="email_submit()">Submit</button>
                            </div>
                        </div>

                    </div>

                    </div>

                    <div id="confirmation">
                        

                    <div class="row">
                        <div class="text-xs-center">
                            <p>Enter here the confirmation code. Please Check spam if you don't notice in inbox.</p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-8">

                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="confirmation_code" class="form-control" name="confirmation_code">
                                <label for="confirmation_code">Confirmation Code</label>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="text-xs-center">
                                <button type="submit" class="btn btn-ins btn-lg" onclick="code_submit()">Confirm</button>
                            </div>
                        </div>

                    </div>

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

    <!-- Validator -->
    <script type="text/javascript" src="js/validator.js"></script>

    <script type="text/javascript">

        function email_submit(){

            var email = $('#email').val();

            if (email.length==0) {

                toastr.info("Please submit an email address!");
                return false;
            }

            $.post("header/sendemail.php",{email:email},function(result){

                toastr.info(result);
                $('#email_submission').hide();
            });
        }

    </script>


</body>

</html>
