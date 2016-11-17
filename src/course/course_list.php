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

        elseif ($_SESSION['login_type']!="committee") {
            header ("Location: http://localhost:8080/cms/");
        }
    ?>

    <?php

        include '../connect/connect.php';
        include '../header/header.php';

    ?>


    <div id="course_list" class="container-fluid">

        <div class="row">

            <div class="col-sm-8">

                <div class="card card-block" align="center">
                    <h3 class="card-title">Course List</h3>
                </div>

                <div class="row">

                    <span id="list"></span>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3>Add new Course</h3>
                        </div>

                        <!--Body-->

                        <div class="md-form">
                            <input type="text" id="add_course_name" class="form-control" name ="add_course_name">
                            <label for="add_course_name">Course Name</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="add_course_code" class="form-control" name="add_course_code">
                            <label for="add_course_code">Course Code</label>
                        </div>

                        <div class="md-form">
                            <textarea type="text" id="add_course_description" class="md-textarea"></textarea>
                            <label for="add_course_description">Course Description: </label>
                        </div>

                        <div class="md-form">
                            <select id="add_user_id" class="mdb-select colorful-select dropdown-danger">
                                <option value="">Select teacher</option>

                                <?php

                                    $sql = "SELECT * FROM user WHERE user_type='teacher'";
                                    $result = mysqli_query($connection, $sql);

                                    $serial = 1;

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                        echo "<option value=".$row['user_id'].">".$row['name']."</option>";    
                                    
                                    }

                                ?>

                            </select>
                            <label for="add_user_id">Select Teacher</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-success btn-block" onclick="add_course()"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3>Remove course</h3>
                        </div>

                        <!--Body-->

                        <div class="md-form">
                            <input type="text" id="remove_course_code" class="form-control" name="remove_course_code">
                            <label for="remove_course_code">Course Code</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-danger btn-block" onclick="remove_course()"><i class="fa fa-minus" aria-hidden="true"></i></button>
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
            $('.mdb-select').material_select();
            view_course_list();
        });

        function view_course_list(){
            $.post("helper/view_course.php",{},function(result){
                $('#list').html(result);
            });
        }

        function add_course(){

            var course_name = $('#add_course_name').val().replace(/ +(?= )/g,'');
            var course_code = $('#add_course_code').val().replace(/ +(?= )/g,'');
            var course_description = $('#add_course_description').val().replace(/ +(?= )/g,'');
            var user_id = $('#add_user_id').val();

            var validation = course_add_validation(course_name, course_name, course_description, user_id);

            if(validation!=true){

                toastr.info(validation);
                return false;
            }

            $.post("helper/add_course.php", {course_name:course_name, course_code:course_code, course_description:course_description, user_id:user_id}, function(result){
                toastr.info(result);
                view_course_list(); 
            });
        }

        function remove_course(){

            var course_code = $('#remove_course_code').val();

            $.post("helper/remove_course.php", {course_code:course_code}, function(result){
                toastr.info(result);
                view_course_list();
            });
        }

    </script>


</body>

</html>
