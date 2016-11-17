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

        elseif (isset($_GET['course_code'])) {
            
            $course_code = $_GET['course_code'];
        }

        else {

            header ("Location: http://localhost:8080/cms/");
        }


    ?>

    <?php

        include '../connect/connect.php';
        include '../header/header.php';

    ?>


    <div id="discussion_list" class="container-fluid">

        <div class="card card-block" align="center">

        <?php

            $sql = "SELECT course_name FROM course WHERE course_code='$course_code'";
            $result = mysqli_query($connection,$sql);
            $row = mysqli_fetch_assoc($result);

            echo '<h3 class="card-title">Course : '.$row['course_name'].'</h3>';

        ?>
            
        </div>

        <div class="row">
            <div class="col-sm-8">

                <span id="question_answer"></span>
                
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div>
                            <h3>Ask Question</h3>
                        </div>

                        <!--Body-->

                        <div class="md-form">
                            <textarea type="text" id="question_body" class="md-textarea"></textarea>
                            <label for="question_body">Question </label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-success btn-block" onclick="ask_question()"><i class="fa fa-plus" aria-hidden="true"></i></button>
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

    <script type="text/javascript">

    $(document).ready(function(){
        question_answer();
    });
        
    function ask_question(){

        var question_body = $('#question_body').val();
        var course_code = '<?php echo $course_code;?>';
        var name = '<?php

                        $id = $_SESSION['login_id'];
                        
                        if ($type=="student"){
                            $sql = "SELECT name FROM student WHERE student_id='$id'";    
                                                                            }
                        else {
                            $sql = "SELECT name FROM user WHERE user_id='$id'";
                        }
                                                                            
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);

                        echo $row['name'];

                    ?>';

/*        console.log(question_body);
        console.log(course_code);
        console.log(name);*/

        $.post("helper/ask_question.php",{question_body:question_body, course_code:course_code, name:name}, function(result){
            toastr.info(result);
            $('#question_body').val("");
            question_answer();
        });
    }

    function question_answer(){

        var course_code = '<?php echo $course_code;?>';

        $.post("helper/show_question.php", {course_code:course_code}, function(result){
            $('#question_answer').html(result);    
        });
        
    }

    function save_answer(question_id){

        var answer = $('#answer-'+question_id).val();
        var name = '<?php

                                $id = $_SESSION['login_id'];
                                
                                if ($type=="student"){
                                    $sql = "SELECT name FROM student WHERE student_id='$id'";    
                                                                                    }
                                else {
                                    $sql = "SELECT name FROM user WHERE user_id='$id'";
                                }
                                                                                    
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);

                                echo $row['name'];

                            ?>';

        /*alert(question_id);
        alert(answer);
        alert(name);*/

        $.post("helper/save_answer.php",{question_id:question_id, answer:answer, name:name}, function(result){
            toastr.info(result);
            question_answer();
        });
    }

    </script>


</body>

</html>
