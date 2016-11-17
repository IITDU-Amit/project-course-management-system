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
			<div class="col-sm-4">
				<div class="card card-block" align="center">
					<h4 class="card-title">Allocated course</h4>
				</div>

				<!-- Course one -->

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
						<!--Accordion wrapper-->
						<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

						    <div class="panel panel-default">

						        <!--Panel heading-->
						        <div class="panel-heading" role="tab" id="assigned_students">
						            <h5 class="panel-title">
										<a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Assigned Students<i class="fa fa-angle-down rotate-icon"></i>
										</a>
									</h5>
						        </div>

						        <!--Panel body-->
						        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="assigned_students">
						        	<ul class="list-group">
						        	 	<li class="list-group-item">Anik<button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus" aria-hidden="true"></i></button></li>

						        	 	<li class="list-group-item">Mehedi<button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus" aria-hidden="true"></i></button></li>

						        	 	<li class="list-group-item">Abir<button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus" aria-hidden="true"></i></button></li>
						        	</ul>
						        </div>
						    </div>
						</div>
						<!--/.Accordion wrapper-->
					</div>
				</div>

				<!-- Course Two -->

				<div class="card">
					<div class="card-header">
						<h5>Course Title: OS</h5>
					</div>
					<div class="card-header">
						<h5>Course Code: 102</h5>
					</div>
					<div class="card-block">
						<p class="card-text">Course Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>

					<div class="card-footer">
						<!--Accordion wrapper-->
						<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

						    <div class="panel panel-default">

						        <!--Panel heading-->
						        <div class="panel-heading" role="tab" id="assigned_students2">
						            <h5 class="panel-title">
										<a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Assigned Students<i class="fa fa-angle-down rotate-icon"></i>
										</a>
									</h5>
						        </div>

						        <!--Panel body-->
						        <div id="collapseTwo" class="panel-collapse collapse" role="tabpane1" aria-labelledby="assigned_students2">
						        	<ul class="list-group">
						        	 	<li class="list-group-item">Anik<button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus" aria-hidden="true"></i></button></li>

						        	 	<li class="list-group-item">Mehedi<button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus" aria-hidden="true"></i></button></li>

						        	 	<li class="list-group-item">Abir<button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-minus" aria-hidden="true"></i></button></li>
						        	</ul>
						        </div>
						    </div>
						</div>
						<!--/.Accordion wrapper-->
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card card-block" align="center">
					<h4 class="card-title">Assign student</h4>
				</div>

				<div class="md-form">
		            <select class="custom-select">
				    	<option selected>Select course</option>
				  		<option value="1">Course One</option>
				  		<option value="2">Course Two</option>
				  		<option value="3">Course Three</option>
		            </select>

		            <input class="form-control" type="text" placeholder="Search">

		            <fieldset class="form-group">
		                <input type="checkbox" id="checkboxAll">
		                <label for="checkboxAll">(select all)</label>
		            </fieldset>

		            <fieldset class="form-group">
		                <input type="checkbox" id="checkbox1">
		                <label for="checkbox1">Anik</label>
		            </fieldset>

		            <fieldset class="form-group">
		                <input type="checkbox" id="checkbox2">
		                <label for="checkbox2">Mehedi</label>
		            </fieldset>

		            <fieldset class="form-group">
		                <input type="checkbox" id="checkbox3">
		                <label for="checkbox3">Linkon</label>
		            </fieldset>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card card-block" align="center">
					<h4 class="card-title">Marks distribution</h4>
				</div>

				<div class="md-form">

		            <div class="md-form">
			            <input type="text" id="criteria" class="form-control">
			            <label for="criteria">Criteria</label>
				    </div>

				    <div class="md-form">
			            <input type="text" id="weight" class="form-control">
			            <label for="weight">Weight</label>
				    </div>

				    <div class="text-xs-center">
				        <button class="btn btn-block btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
