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


    <div id="course_list" class="container-fluid">

        <div class="row">

            <div class="col-sm-4">

                <div class="card card-block" align="center">
                    <h4 class="card-title">Allocated course</h4>
                </div>

                <div class="card">

                <?php

                    $user_id = $_SESSION['login_id'];
                    $sql = "SELECT * FROM course WHERE user_id='$user_id'";
                    $result = mysqli_query($connection, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {

                        $course_code = $row['course_code'];
                        
                        echo'
                            <div class="card-header">
                                <h5>Course : '.$row['course_name'].'</h5>
                            </div>
                            <div class="card-header">
                                <h5>Code : '.$row['course_code'].'</h5>
                            </div>
                            <div class="card-block course_description">
                                <p class="card-text">'.$row['course_description'].'</p>
                            </div>


                            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                
                                <div class="card-header" id="assigned_students">
                                    <h5 class="arrow-r" data-toggle="collapse" data-parent="#accordion" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Assigned Students<i class="fa fa-angle-down rotate-icon"></i></h5>
                                </div>

                                <div id="collapseExample" class="table-responsive collapse" role="tabpanel" aria-labelledby="assigned_students">
                                    
                                    <table class="table">
                                        <tbody>';

                                        $sql2 = "SELECT student_id, name FROM student WHERE student_id IN (SELECT student_id FROM student_allocation WHERE course_code='$course_code')";
                                        $result2 = mysqli_query($connection, $sql2);

                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            
                                            echo '<tr>
                                                    <td> '.$row2['name'].'

                                                        <input type="hidden" id="student_id-'.$row2['student_id'].'" value="'.$row2['student_id'].'" >
                                                        <input type="hidden" id="course_code-'.$row2['student_id'].'" value="'.$course_code.'" >

                                                    </td>
                                                    <td>

                                                        <button onclick="remove_allocation('.$row2['student_id'].')" class="btn btn-danger btn-sm pull-right"><i class="fa fa-minus"></i></button>
                                                    </td>
                                                  </tr>';
                                        }

                            echo            '</tbody>
                                    </table>

                                </div>

                            </div>';

                    }

                ?>


                </div>

            </div>

            <div class="col-sm-4">

                <div class="card card-block" align="center">
                    <h4 class="card-title">Assign student</h4>
                </div>

                <div class="card card-block">

                    <select id="assign_course_code" class="mdb-select colorful-select dropdown-danger">

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

                    <form class="row" id="search">
                        
                        <div class="col-sm-10">
                            <div class="md-form">
                                <input id="search_data" class="form-group form-control" type="text" name="search_data">
                                <label for="search_data">Search Student by Email</label>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <button class="form-group btn btn-success" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>    
                        </div>

                    </form>

                    <span id="search_result"></span>

                </div>
            </div>

            <div class="col-sm-4">

                <div class="card card-block" align="center">
                    <h4 class="card-title">Marks distribution</h4>
                </div>

                <div id="marks_distribution_panel">

                <div class="card card-block">
                    
                    <select id="distribution_course_code" class="mdb-select colorful-select dropdown-danger">

                        <option value="" selected>Select course</option>

                        <?php

                            $user_id = $_SESSION['login_id'];
                            $sql = "SELECT * FROM course WHERE user_id='$user_id' AND course_code NOT IN (SELECT course_code FROM marks_distribution)";
                            $result = mysqli_query($connection, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<option value=".$row['course_code'].">".$row['course_name']."</option>";

                            }
                        ?>
                    
                    </select>

                    <div id="dynamic_distritution">

                        <div class="row">

                            <div class="col-sm-5">
                                <div class="md-form">
                                    <input type="text" id="criteria" name="criteria[]" class="form-control">
                                    <label for="criteria">Criteria</label>
                                </div>    
                            </div>
                            <div class="col-sm-5">
                                <div class="md-form">
                                    <input type="number" id="weight" name="weight[]" class="form-control">
                                    <label for="weight">Weight</label>
                                </div>    
                            </div>
                            <div class="col-sm-2">
                                <div class="md-form">
                                    <button class="btn btn-success" id="add_criteria"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>    
                            </div>

                        </div>
                        
                    </div>

                    <button class="btn btn-success btn-block" onclick="confirm_marks_distribution()">Confirm</button>

                </div>


                <div class="card card-block">

                    <div class="row">

                        <div class="col-sm-6">
                            
                            <select id="show_distribution_course_code" class="mdb-select colorful-select dropdown-danger">

                                <option value="" selected>Select course</option>

                                <?php

                                    $user_id = $_SESSION['login_id'];
                                    $sql = "SELECT * FROM course WHERE user_id='$user_id' AND course_code IN (SELECT course_code FROM marks_distribution)";
                                    $result = mysqli_query($connection, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<option value=".$row['course_code'].">".$row['course_name']."</option>";

                                    }
                                ?>
                            
                            </select>

                        </div>

                        <div class="col-sm-6">

                            <button class="btn btn-success btn-block" id="show_marks_distribution_button" onclick="show_marks_distribution()">Show Distributions</button>

                        </div>
                        
                    </div>
                        
                    <span id="distribution_data"></span>

                    <button class="btn btn-danger btn-block" id="delete_marks_distribution_button" onclick="delete_marks_distribution()">Delete Distributions</button>

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

            $('#delete_marks_distribution_button').hide();

            $('#search').submit(function(e){
                e.preventDefault();

                var course_code = $('#assign_course_code').val();

                if (course_code.length==0) {
                    toastr.info("No course is selected");
                    return false;
                }

                var search_data = $('#search_data').val();

                if(search_data.length==0){

                    toastr.info("Search data is empty! Please search with valid data.");
                    return false;
                }

                $.post("helper/student_search.php",{course_code:course_code, search_data:search_data}, function(result){
                    $('#search_result').html(result);

                    $("#select_all").change(function(){ 
                        $(".checkbox").prop('checked', $(this).prop("checked")); 
                    });

                    $('.checkbox').change(function(){ 
                        
                        if(false == $(this).prop("checked")){ 
                            $("#select_all").prop('checked', false); 
                        }
                        
                        if ($('.checkbox:checked').length == $('.checkbox').length ){
                            $("#select_all").prop('checked', true);
                        }
                    });
                    
                });
            });

            var i = 1;

            $('#add_criteria').click(function(){
                i++;
                var new_criteria = '<div class="row" id="row'+i+'"><div class="col-sm-5"><div class="md-form"><input type="text" id="criteria" name="criteria[]" class="form-control"><label for="criteria">Criteria</label></div></div><div class="col-sm-5"><div class="md-form"><input type="number" id="weight" name="weight[]" class="form-control"><label for="weight">Weight</label></div></div><div class="col-sm-2"><div class="md-form"><button class="btn btn-danger waves-effect waves-light btn-remove" id="'+i+'"><i class="fa fa-minus" aria-hidden="true"></i></button></div></div></div>';
                $('#dynamic_distritution').append(new_criteria);
            });

            $(document).on('click','.btn-remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id).remove();
            });

        });


        function assign_student(){

            var course_code = $('#assign_course_code').val();
            var student_id = [];

            if(course_code.length==0){

                toastr.info("No course is selected!")
                return false;
            }

            $("[name~='student_id[]']").each(function(index,value) {
                student_id.push($(value).val());
            });

            $.post("helper/assign_student.php", {course_code:course_code,student_id:student_id}, function(result){
                toastr.info(result);
                $('#search_result').html("");
            });
        }

        function remove_allocation(str){

            var student_id = $('#student_id-'+str).val();
            var course_code = $('#course_code-'+str).val();

            $.post("helper/remove_allocation.php",{student_id:student_id, course_code:course_code}, function(result){

                toastr.info(result);

                location.reload();
            });
        }

        function confirm_marks_distribution(){

            var course_code = $('#distribution_course_code').val();
            var criteria = [];
            var weight = [];

            if(course_code.length==0){

                toastr.info("No course is selected!")
                return false;
            }


            $("[name~='criteria[]']").each(function(index,value) {
                criteria.push($(value).val());
            });

            $("[name~='weight[]']").each(function(index,value) {
                weight.push($(value).val());
            });

            var validation = marks_distribution_validation(criteria, weight);

            if(validation!=true){

                toastr.info(validation);
                return false;
            }

            $.post("helper/marks_distribution.php", {course_code:course_code,criteria:criteria,weight:weight}, function(result){
                
                toastr.info(result);

                location.reload();
            });
        }


        function show_marks_distribution(){

            var course_code = $('#show_distribution_course_code').val();

            if(course_code.length==0){

                toastr.info("No course is selected!")
                return false;
            }

            $.post("helper/show_marks_distribution.php",{course_code:course_code},function(result){

                $('#distribution_data').html(result);
                $('#delete_marks_distribution_button').show();
            });

        }

        function delete_marks_distribution(){

            var course_code = $('#delete_distribution_course_code').val();

            if(course_code.length==0){

                toastr.info("No course is selected!")
                return false;
            }

            $.post("helper/delete_marks_distribution.php",{course_code:course_code},function(result){

                toastr.info(result);

                location.reload();
            });
        }

    </script>


</body>

</html>
