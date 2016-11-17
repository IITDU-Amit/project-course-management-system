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

        elseif ($_SESSION['login_type']!="admin") {
            header ("Location: http://localhost:8080/cms/");
        }
    ?>

    <?php

        include '../connect/connect.php';
        include '../header/header.php';

    ?>

    <div id="teacher_list" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-block">

                        <h3 class="flex-center">Teacher's List</h3>
                        
                        <span id="list"></span>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3>Add new teacher</h3>
                        </div>

                        <!--Body-->

                        <div class="md-form">
                            <input type="text" id="add_teacher_name" class="form-control" name="add_teacher_name">
                            <label for="add_teacher_name">Name</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="add_teacher_email" class="form-control" name="add_teacher_email">
                            <label for="add_teacher_email">Email</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-success btn-block" onclick="add_teacher()"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3>Remove teahcer</h3>
                        </div>

                        <!--Body-->

                        <div class="md-form">
                            <input type="text" id="remove_teacher_email" class="form-control" name="remove_teacher_email">
                            <label for="remove_teacher_email">Email</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-danger btn-block" onclick="remove_teacher()"><i class="fa fa-minus" aria-hidden="true"></i></button>
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
            $.post("helper/view_teacher.php",{},function(result){
                $('#list').html(result);
            });
        }

        function add_teacher(){

            var name = $('#add_teacher_name').val().replace(/ +(?= )/g,'');
            var email = $('#add_teacher_email').val();

            var validation = teacher_add_validation(name, email);

            if(validation!=true){

                toastr.info(validation);
                return false;
            }

            $.post("helper/add_teacher.php", {name:name,email:email}, function(result){
                toastr.info(result);
                view_list();
            });
        }

        function remove_teacher(){

            var email = $('#remove_teacher_email').val();

            $.post("helper/remove_teacher.php", {email:email}, function(result){
                toastr.info(result);
                view_list();
            });
        }

    </script>

</body>

</html>
