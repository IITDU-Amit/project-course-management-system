<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | IITDU</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="body_background" class="fixed-sn blue-skin">

<!-- Preloader Animation -->

	<div id="preloader">
	  <div id="preloader-inner"></div>
	</div>

    <!--Double navigation-->
        <header>

            <!-- Sidebar navigation -->
            <ul id="slide-out" class="side-nav fixed custom-scrollbar">

                <!-- Logo -->
                <li>
                    <div class="waves-light waves-effect">
                        <a class="logo-wrapper flex-center" href="#"><img src="img/iitlogo.png" class="img-fluid"></a>
                    </div>
                </li>
                <!--/. Logo -->

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Student<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="student_list.html" target="_blank" class="waves-effect"><i id="icon" class="fa fa-minus-square-o" aria-hidden="true"></i>Students List</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-th-list"></i> Course<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="course_list.html" target="_blank" class="waves-effect"><i id="icon" class="fa fa-minus-square-o" aria-hidden="true"></i>Course List</a></li>
                                    <li><a href="enrolled_course.html" target="_blank" class="waves-effect"><i id="icon" class="fa fa-clipboard" aria-hidden="true"></i>Enrolled Courses</a></li>
                                    <li><a href="#" class="waves-effect"><i id="icon" class="fa fa-clipboard" aria-hidden="true"></i>Allocated Courses</a></li>                             
                                </ul>
                            </div>
                        </li>

                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Marks<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect"><i id="icon" class="fa fa-pencil-square-o" aria-hidden="true"></i>Enter Marks</a></li>
                                    <li><a href="#" class="waves-effect"><i id="icon" class="fa fa-eye" aria-hidden="true"></i>View Marks</a></li>
                                    <li><a href="#" class="waves-effect"><i id="icon" class="fa fa-calendar" aria-hidden="true"></i>Deadline</a></li>   
                                </ul>
                            </div>
                        </li>           

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user-secret" aria-hidden="true"></i>Teacher<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="teacher_list.html" target="_blank" class="waves-effect"><i id="icon" class="fa fa-minus-square-o" aria-hidden="true"></i>Teachers List</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-comments"></i> Discussion<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="discussion.html" target="_blank" class="waves-effect"><i id="icon" class="fa fa-angle-double-right"></i>Course A</a></li>
                                    <li><a href="#" class="waves-effect"><i id="icon" class="fa fa-angle-double-right"></i>Course B</a></li>
                                    <li><a href="#" class="waves-effect"><i id="icon" class="fa fa-angle-double-right"></i>Course C</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->

            </ul>
            <!--/. Sidebar navigation -->

            <!--Navbar-->
            <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

                <!-- SideNav slide-out button -->
                <div class="pull-left">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
                </div>

                <!-- Breadcrumb-->
                <div class="breadcrumb-dn">
                    <p>Institute of Information Technology</p>
                </div>

                <ul class="nav navbar-nav pull-right">

                    <li class="nav-item ">
                        <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Messages</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Md. Mehedi Hasan</a>
                        <div class="dropdown-menu dropdown-primary dd-left" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>

            </nav>
            <!--/.Navbar-->

        </header>
        <!--/Double navigation-->
        
        <main class="centered container-fluid">
            <!-- <div>
                <h2 class="heading flex-center">Course Management System</h2>
                <h3 class="heading flex-center">Institute of Information Technology</h3>
                <h3 class="heading flex-center">University of Dhaka</h3>
            </div> -->
        </main>

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

    <script>
        // SideNav init
        $(".button-collapse").sideNav();

        // Custom scrollbar init
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);


        //Preloader
        $(window).preloader({

          // preloader selector
          selector: '#preloader',

          // Preloader container holder
          type: 'document',

          // 'fade' or 'remove'
          removeType: 'fade',

          // fade duration
          fadeDuration: 750,

          // auto disimss after x milliseconds
          delay: 250
          
        });

    </script>


</body>

</html>
