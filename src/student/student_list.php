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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body class="fixed-sn blue-skin index-body">

    <?php

        session_start();

        if (!isset($_SESSION['login_id'])) {
            header ("Location: http://localhost:8080/cms/login.php");
        }

        elseif ($_SESSION['login_type']!="staff") {
            header ("Location: http://localhost:8080/cms/");
        }
    ?>

    <?php

        include '../connect/connect.php';
        include '../header/header.php';

    ?>


    <div id="student_list" class="container-fluid">
        
        <div class="row">

            <div class="col-sm-8">
                <div class="card">
                    <div class="card-block">

                        <div class="row">
                        
                            <div class="col-sm-8">
                                <h3 class="flex-center">Student List</h3>        
                            </div>
                            <div class="col-sm-4" align="right">
                                <button type="button" class="btn btn-success waves-effect waves-light" onclick="create_csv()">Download as CSV</button>  
                            </div>
                        </div>

                        <span id="list"></span>

                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3 class="flex-center">Add Student</h3>
                        </div>

                        <!--Body-->

                        <div class="md-form">
                            <input type="text" id="addname" class="form-control" name="addname">
                            <label for="addname">Name</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="addemail" class="form-control" name="addemail">
                            <label for="addemail">Email</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-success btn-block" onclick="add_student()"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3 class="flex-center">Remove Student</h3>
                        </div>

                        <!--Body-->

                        <div class="md-form">
                            <input type="text" id="removeemail" class="form-control" name="removeemail">
                            <label for="removeemail">Email</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-danger btn-block" onclick="remove_student()"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>

                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="../js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <!-- Jquery Preloader Plugin -->
    <script type="text/javascript" src="../js/jquery.preloader.min.js"></script>

    <!-- Header and Preloader Js -->
    <script type="text/javascript" src="../js/header.js"></script>

    <!-- Validator Js -->
    <script type="text/javascript" src="../js/validator.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function(){
            view_list();
        });

        function view_list(){
            $.post("helper/view_student.php",{},function(result){
                $('#list').html(result);
            });
        }

        function create_csv(){
            
            var page = "helper/student_list_csv.php";

            window.location = page;
        }

        function add_student(){

            var name = $('#addname').val().replace(/ +(?= )/g,'');
            var email = $('#addemail').val();

            var validation = student_add_validation(name, email);

            if(validation!=true){

                toastr.info(validation);
                return false;
            }

            $.post("helper/add_student.php", {name:name,email:email}, function(result){
                toastr.info(result);
                view_list();
            });
        }

        function remove_student(){

            var email = $('#removeemail').val();

            $.post("helper/remove_student.php", {email:email}, function(result){
                toastr.info(result);
                view_list();
            });
        }

    </script>


</body>

</html>
