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
                        <a class="logo-wrapper flex-center" href="http://localhost:8080/cms/"><img src="http://localhost:8080/cms/img/iitlogo.png" class="img-fluid"></a>
                    </div>
                </li>
                <!--/. Logo -->

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li id="sidenav_student"><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Student<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li id="sidenav_student_list"><a href="http://localhost:8080/cms/student/student_list.php" class="waves-effect"><i id="icon" class="fa fa-minus-square-o" aria-hidden="true"></i>Students List</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="sidenav_course"><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-th-list"></i> Course<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li id="sidenav_course_list"><a href="http://localhost:8080/cms/course/course_list.php" class="waves-effect"><i id="icon" class="fa fa-minus-square-o" aria-hidden="true"></i>Course List</a></li>
                                    <li id="sidenav_enrolled_course"><a href="http://localhost:8080/cms/course/enrolled_course.php" class="waves-effect"><i id="icon" class="fa fa-clipboard" aria-hidden="true"></i>Enrolled Courses</a></li>
                                    <li id="sidenav_allocated_course"><a href="http://localhost:8080/cms/course/allocated_course.php" class="waves-effect"><i id="icon" class="fa fa-clipboard" aria-hidden="true"></i>Allocated Courses</a></li>                             
                                </ul>
                            </div>
                        </li>

                        <li id="sidenav_marks"><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Marks<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li id="sidenav_enter_marks"><a href="http://localhost:8080/cms/marks/marks_entry.php" class="waves-effect"><i id="icon" class="fa fa-pencil-square-o" aria-hidden="true"></i>Enter Marks</a></li>
                                    <li id="sidenav_view_marks"><a href="http://localhost:8080/cms/marks/view_marks.php" class="waves-effect"><i id="icon" class="fa fa-eye" aria-hidden="true"></i>View Marks</a></li>
                                    <li id="sidenav_deadline"><a href="http://localhost:8080/cms/marks/deadline.php" class="waves-effect"><i id="icon" class="fa fa-calendar" aria-hidden="true"></i>Deadline</a></li>   
                                </ul>
                            </div>
                        </li>           

                        <li id="sidenav_teacher"><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user-secret" aria-hidden="true"></i> Teacher<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li id="sidenav_teacher_list"><a href="http://localhost:8080/cms/teacher/teacher_list.php" class="waves-effect"><i id="icon" class="fa fa-minus-square-o" aria-hidden="true"></i>Teachers List</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="sidenav_discussion"><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-comments"></i> Discussion<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <?php

                                        $id = $_SESSION['login_id'];
                                        $type = $_SESSION['login_type'];

                                        if ($type=="student"){
                                            $sql = "SELECT course.course_name, student_allocation.course_code FROM course, student_allocation WHERE student_allocation.student_id = '$id' AND course.course_code = student_allocation.course_code";
                                        }
                                        else if($type="teacher") {
                                            $sql = "SELECT course_name, course_code FROM course WHERE user_id='$id'";
                                        }                                        

                                        $result = mysqli_query($connection,$sql);

                                        while ($row = mysqli_fetch_assoc($result)) {

                                           echo '<li><a href="http://localhost:8080/cms/discussion/discussion.php?course_code='.$row['course_code'].'" class="waves-effect"><i id="icon" class="fa fa-angle-double-right"></i>'.$row['course_name'].'</a></li>';
                                        }

                                    ?>
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php

                                                                            $id = $_SESSION['login_id'];
                                                                            $type = $_SESSION['login_type'];

                                                                            if ($type=="student"){
                                                                                $sql = "SELECT name FROM student WHERE student_id='$id'";    
                                                                            }
                                                                            else {
                                                                                $sql = "SELECT name FROM user WHERE user_id='$id'";
                                                                            }
                                                                            
                                                                            $result = mysqli_query($connection, $sql);
                                                                            $row = mysqli_fetch_assoc($result);

                                                                            echo $row['name'];

                                                                        ?> </a>
                        <div class="dropdown-menu dropdown-primary dd-left" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item" href="http://localhost:8080/cms/account.php">Account</a>
                            <!-- <a class="dropdown-item" href="http://localhost:8080/cms/change_password.php">Settings</a> -->
                            <a class="dropdown-item" href="#" onclick="return logout()">Logout</a>
                        </div>
                    </li>
                </ul>

            </nav>
            <!--/.Navbar-->

        </header>
        <!--/Double navigation-->

        <script type="text/javascript">

            function logout(){

                $.post("http://localhost:8080/cms/header/logout.php",{},function(result){
                  if (result=="Logged out") {
                    window.location.replace("http://localhost:8080/cms/login.php");
                  }
                });

                return false;
            }

            var user_type = '<?php echo $_SESSION['login_type'];?>';

            if(user_type == "student"){

                document.getElementById("sidenav_student").style.display = "none";
                document.getElementById("sidenav_course_list").style.display = "none";
                document.getElementById("sidenav_allocated_course").style.display = "none";
                document.getElementById("sidenav_enter_marks").style.display = "none";
                document.getElementById("sidenav_deadline").style.display = "none";
                document.getElementById("sidenav_teacher").style.display = "none";

            }

            else if(user_type == "teacher"){

                document.getElementById("sidenav_student").style.display = "none";
                document.getElementById("sidenav_course_list").style.display = "none";
                document.getElementById("sidenav_enrolled_course").style.display = "none";
                document.getElementById("sidenav_view_marks").style.display = "none";
                document.getElementById("sidenav_deadline").style.display = "none";
                document.getElementById("sidenav_teacher").style.display = "none";

            }

            else if(user_type == "staff"){

                document.getElementById("sidenav_course").style.display = "none";
                document.getElementById("sidenav_marks").style.display = "none";
                document.getElementById("sidenav_teacher").style.display = "none";
                document.getElementById("sidenav_discussion").style.display = "none";

            }

            else if(user_type == "committee"){

                document.getElementById("sidenav_student").style.display = "none";
                document.getElementById("sidenav_enrolled_course").style.display = "none";
                document.getElementById("sidenav_allocated_course").style.display = "none";
                document.getElementById("sidenav_enter_marks").style.display = "none";
                document.getElementById("sidenav_view_marks").style.display = "none";
                document.getElementById("sidenav_teacher").style.display = "none";
                document.getElementById("sidenav_discussion").style.display = "none";

            }

            else if(user_type == "admin"){

                document.getElementById("sidenav_student").style.display = "none";
                document.getElementById("sidenav_course").style.display = "none";
                document.getElementById("sidenav_marks").style.display = "none";
                document.getElementById("sidenav_discussion").style.display = "none";

            }


        </script>
