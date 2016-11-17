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


    <div id="course_list" class="container-fluid">

        <div class="card card-block" align="center">
            <h3 class="card-title">Enrolled Courses</h3>
        </div>

        <div class="row">


            <?php

                $list = '';

                $sql = "SELECT * FROM course";
                $result = mysqli_query($connection, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    $user_id = $row["user_id"];

                    $sql2 = "SELECT * FROM user WHERE user_id='$user_id'";
                    $result2 = mysqli_query($connection, $sql2);
                    $row2 = mysqli_fetch_assoc($result2);

                    $list.= '<div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Course : '.$row['course_name'].'</h5>
                                    </div>
                                    <div class="card-header">
                                        <h5>Code : '.$row['course_code'].'</h5>
                                    </div>
                                    <div class="card-block course_description">
                                        <p class="card-text">'.$row['course_description'].'</p>
                                    </div>
                                    <div class="card">
                                         <div class="card-header">
                                             <h5>Teacher : '.$row2['name'].'</h5>
                                         </div>
                                    </div>
                                    
                                </div>
                            </div>';
                                          
                }

                echo $list;

            ?>


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

</body>

</html>
