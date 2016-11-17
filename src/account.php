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

<body class="fixed-sn blue-skin index-body">

    <?php

        session_start();

        if (!isset($_SESSION['login_id'])) {
            header ("Location: http://localhost:8080/cms/login.php");
        }

    ?>

    <?php

        include 'connect/connect.php';
        include 'header/header.php';

    ?>


    <div id="account" class="container">

                <!--First column-->
                <div class="col-sm-8">

                    <!--Rotating card-->
                    <div class="card card-block" align="center">
                        <div>

                            <?php

                                if($_SESSION['login_type']=="student"){

                                    $student_id = $_SESSION['login_id'];
                                    $sql = "SELECT * FROM student WHERE student_id='$student_id'";
                                }

                                else{

                                    $user_id = $_SESSION['login_id'];
                                    $sql = "SELECT * FROM user WHERE user_id='$user_id'";
                                }

                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);


                            ?>
                                <!--Content-->
                                <h4><strong>About User</strong></h4>
                            
                                
                                <div class="table-responsive">
                                    <table class="table">

                                        <tbody>

                                            <tr>
                                                <td>Name</td>
                                                <td><?php echo $row['name']?></td>
                                                <td>
                                                    <a class="teal-text"><i class="fa fa-pencil"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo $row['email']?></td>
                                            </tr>

                                            <tr>
                                                <td>Contact No.</td>
                                                <td><?php echo $row['contact']?></td>
                                                <td>
                                                    <a class="teal-text"><i class="fa fa-pencil"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <a href="change_password.php" id="change_password" class="btn btn-primary">Change password</a>
                        </div>
                    </div>
                    <!--/.Rotating card-->
                </div>
                <!--/First column-->   
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


</body>

</html>
