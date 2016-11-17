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

    <!-- Jquery UI CSS -->
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">

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

    <div id="deadline" class="container-fluid">

        <div class="row">

            <div class="col-sm-8">

                <span id="deadline_list"></span>

            </div>

            <div class="col-sm-4">

                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3>Set Marks Entry Date</h3>
                        </div>

                        <!--Body-->


                        <div class="md-form">
                            <select id="select_course" class="mdb-select colorful-select dropdown-danger">
                                <option value="">Select Course</option>

                                <?php

                                    $sql = "SELECT * FROM course";
                                    $result = mysqli_query($connection, $sql);

                                    $serial = 1;

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                        echo "<option value=".$row['course_code'].">".$row['course_name']."</option>";    
                                    
                                    }

                                ?>

                            </select>
<!--                             <label for="select_course">Select Course</label> -->
                        </div>

                        <div class="md-form">
                            <input type="text" id="start_date" class="form-control" name ="start_date">
                            <label for="start_date">Starting Date</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="end_date" class="form-control" name ="end_date">
                            <label for="end_date">Ending Date</label>
                        </div>


                        <div class="text-xs-center">
                            <button class="btn btn-success btn-block" onclick="set_date()"><i class="fa fa-plus" aria-hidden="true"></i></button>
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

    <!-- Jquery UI Js -->
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>

    <!-- Validator Js -->
    <script type="text/javascript" src="../js/validator.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            $('.mdb-select').material_select();

            $('#start_date, #end_date').datepicker();
            $('#start_date, #end_date').datepicker("option","dateFormat","yy-mm-dd");

            view_daedline_list();
        });

        function view_daedline_list(){

            $.post("helper/deadline_list.php",{},function(result){
                $('#deadline_list').html(result);
            });
        }

        function set_date(){

            var course_code = $('#select_course').val();
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();

            var validation = set_date_validation(course_code, start_date, end_date);

            if(validation!=true){

                toastr.info(validation);
                return false;
            }

            $.post("helper/setdate.php",{course_code:course_code, start_date:start_date, end_date:end_date}, function(result){
                toastr.info(result);
                view_daedline_list();
            });
        }


    </script>


</body>

</html>
