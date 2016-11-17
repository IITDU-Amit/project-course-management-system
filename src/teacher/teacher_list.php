<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | IITDU | Teacher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<div id="teacher_list" class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="card">
					<div class="card-block">

						<h3>Teacher's List</h3>

						<div class="table-responsive">
							<table class="table table-hover">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Name</th>
							      <th>Email</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Amit Seal Amit</td>
							      <td>amit@iit.du.ac.bd</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Alim Ul Gias</td>
							      <td>alim@iit.du.ac.bd</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>Zafar</td>
							      <td>zafar@gmail.com</td>
							    </tr>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
				    <div class="card-block">

				        <!--Header-->
				        <div>
				        	<h3>Add new teacher</h3>
				        </div>

				        <!--Body-->

				        <div class="md-form">
				            <input type="text" id="teacher_name" class="form-control">
				            <label for="teacher_name">Name</label>
				        </div>

				        <div class="md-form">
				            <input type="text" id="teacher_email1" class="form-control">
				            <label for="teacher_email1">Email</label>
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
				        	<h3>Remove teahcer</h3>
				        </div>

				        <!--Body-->

				        <div class="md-form">
				            <input type="text" id="teacher_email2" class="form-control">
				            <label for="teacher_email2">Email</label>
				        </div>

				        <div class="text-xs-center">
				            <button class="btn btn-danger btn-block"><i class="fa fa-minus" aria-hidden="true"></i></button>
				        </div>

				    </div>
				</div>

				<div class="card">
				    <div class="card-block">

				        <!--Header-->
				        <div>
				        	<h3>Assign teacher to course</h3>
				        </div>

				        <!--Body-->

				        <div class="md-form">
				            <select class="custom-select">
						    	<option selected>Select course</option>
						  		<option value="1">Course One</option>
						  		<option value="2">Course Two</option>
						  		<option value="3">Course Three</option>
				            </select>
				        </div>

				        <div class="md-form">
				            <select class="custom-select">
						    	<option selected>Select teacher</option>
						  		<option value="1">Amit</option>
						  		<option value="2">Abir</option>
						  		<option value="3">Rayhan</option>
				            </select>
				        </div>
				      
				        <div class="text-xs-center">
				            <button class="btn btn-primary btn-block">Assign</button>
				        </div>

				    </div>
				</div>
			</div>
		</div>
	</div>

    <!-- SCRIPTS -->

    <script type="text/javascript">
    	$(document).ready(function() {
    	   $('.mdb-select').material_select();
    	 });
    </script>

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
