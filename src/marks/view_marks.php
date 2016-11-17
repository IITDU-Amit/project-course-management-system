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

        elseif ($_SESSION['login_type']!="student") {
            header ("Location: http://localhost:8080/cms/");
        }
    ?>

    <?php

        include '../connect/connect.php';
        include '../header/header.php';

    ?>


    <div id="marks_entry" class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">

                        <h3>Select course</h3>

                        <div class="md-form">

                            <select id="course_code" class="mdb-select colorful-select dropdown-danger">

                                <option value="" selected>Select course</option>

                                <?php

                                    $student_id = $_SESSION['login_id'];
                                    $sql = "SELECT course_code FROM student_allocation WHERE student_id='$student_id'";
                                    $result = mysqli_query($connection, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $course_code = $row['course_code'];

                                        $sql2 = "SELECT course_name FROM course WHERE course_code='$course_code'";
                                        $result2 = mysqli_query($connection,$sql2);
                                        $row2 = mysqli_fetch_assoc($result2);

                                        echo "<option value=".$course_code.">".$row2['course_name']."</option>";

                                    }
                                ?>
                            
                            </select>
                        </div>

                        <div class="md-form text-xs-center">
                            <button type="button" class="btn btn-block btn-success" onclick="view_marks()">View Marks</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
              <span id="marksheet"></span>
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

    <script type="text/javascript">
        $(document).ready(function(){
          $('.mdb-select').material_select();
        });

        function view_marks(){

          var student_id= '<?php echo $_SESSION['login_id'];?>';
          var course_code = $('#course_code').val();

          if(course_code.length==0){

            toastr.info("No course is selected!");
            return false;
          }

          $.post("helper/view_mark_sheet.php", {student_id:student_id,course_code:course_code}, function(result){
              $('#marksheet').html(result);
          });
        }

    </script>


</body>

</html>
