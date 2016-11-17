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

        elseif ($_SESSION['login_type']!="teacher") {
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

                                    $user_id = $_SESSION['login_id'];
                                    $sql = "SELECT * FROM course WHERE user_id='$user_id'";
                                    $result = mysqli_query($connection, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<option value=".$row['course_code'].">".$row['course_name']."</option>";

                                    }
                                ?>
                            
                            </select>
                        </div>

                        <div class="md-form text-xs-center">
                            <button type="button" class="btn btn-block btn-success" onclick="number_sheet()">Generate Numbersheet</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">

              <span id="numbersheet"></span>
              
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

        });


        function number_sheet(){
          var course_code = $('#course_code').val();

          if(course_code.length==0){

            toastr.info("No course is selected!");
            return false;
          }

          $.post("helper/number_sheet.php", {course_code:course_code}, function(result){
              if (result=="Sorry") {
                $('#numbersheet').html("");
                toastr.info("You are not allowed to enter marks now");
              }
              else{
                
                $('#numbersheet').html(result);

                $('input:checkbox').change(function () {
                    
                    if($(this).is(":checked")){

                        $(this).val("1");    
                    }
                    
                    else{

                        $(this).val("0");
                    }

                    var course_code = $('#numbersheet_course_code').val();
                    var distribution_id = [];
                    var viewable = [];

                    $("[name~='distribution_id[]']").each(function(index,value) {
                      distribution_id.push($(value).val());
                    });

                    $("[name~='viewable[]']").each(function(index,value) {
                      viewable.push($(value).val());
                    });

                    console.log(course_code);
                    console.log(distribution_id);
                    console.log(viewable);

                    $.post("helper/setviewable.php", {course_code:course_code, distribution_id:distribution_id, viewable:viewable}, function(result){

                        toastr.info(result);
                    });
                });  
              }
              
          });

        }

        function create_csv(){

            var course_code = $('#numbersheet_course_code').val();
            
            var page = "helper/number_sheet_csv.php?course_code="+course_code;

            window.location = page;
        }

        function save_marks(){

            var course_code = $('#numbersheet_course_code').val();
            var distribution_id = [];
            var distribution_criteria = [];
            var distribution_weight = [];
            var student_id = [];
            var marks = [];

            $("[name~='distribution_id[]']").each(function(index,value) {
              distribution_id.push($(value).val());
            });

            $("[name~='distribution_criteria[]']").each(function(index,value) {
              distribution_criteria.push($(value).val());
            });

            $("[name~='distribution_weight[]']").each(function(index,value) {
              distribution_weight.push($(value).val());
            });

            $("[name~='student_id[]']").each(function(index,value) {
              student_id.push($(value).val());
            });

            $("[name~='marks[]']").each(function(index,value) {
              marks.push($(value).val());
            });

            console.log(course_code);
            console.log(distribution_id);
            console.log(distribution_criteria);
            console.log(distribution_weight);
            console.log(student_id);
            console.log(marks);

            var validation = save_marks_validation(distribution_criteria, distribution_weight, marks);

            if (validation!=true) {
                toastr.info(validation);
                return false;
            }

            $.post("helper/save_marks.php", {course_code:course_code, distribution_id:distribution_id, student_id:student_id, marks:marks}, function(result){

                toastr.info(result);
            });

        }

    </script>

</body>

</html>
