<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | IITDU | Course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<div id="course_list" class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="card card-block" align="center">
					<h3 class="card-title">Course List</h3>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">
								<h5>Course Title: Mathmetics</h5>
							</div>
							<div class="card-header">
								<h5>Course Code: 101</h5>
							</div>
							<div class="card-block">
								<p class="card-text">Course Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
							<div class="card-footer">
								<div class="col-sm-10">
									<h5>Allocated Teacher: Mahbubul Joardar</h5>
								</div>
								<div>
									<button type="button" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">
								<h5>Course Title: Operating System</h5>
							</div>
							<div class="card-header">
								<h5>Course Code: 102</h5>
							</div>
							<div class="card-block">
								<p class="card-text">Course Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
							<div class="card-footer">
								<div class="col-sm-10">
									<h5>Allocated Teacher: Mahbubul Joardar</h5>
								</div>
								<div>
									<button type="button" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
				    <div class="card-block">

				        <!--Header-->
				        <div>
				        	<h3>Add new course</h3>
				        </div>

				        <!--Body-->

				        <div class="md-form">
				            <input type="text" id="course_name" class="form-control">
				            <label for="course_name">Course Name</label>
				        </div>

				        <div class="md-form">
				            <input type="text" id="course_code1" class="form-control">
				            <label for="course_code1">Course Code</label>
				        </div>

				      	<div class="md-form">
				      	    <textarea type="text" id="course_description" class="md-textarea"></textarea>
				      	    <label for="course_description">Course Description: </label>
				      	</div>

				        <div class="text-xs-center">
				            <button class="btn btn-success btn-block"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
				            <input type="text" id="course_code2" class="form-control">
				            <label for="course_code2">Course Code</label>
				        </div>

				        <div class="text-xs-center">
				            <button class="btn btn-danger btn-block"><i class="fa fa-minus" aria-hidden="true"></i></button>
				        </div>

				    </div>
				</div>
			</div>
		</div>
	</div>

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

</body>

</html>
