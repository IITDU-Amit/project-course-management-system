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
			<div class="col-sm-4">
				<div class="card">
					<div class="card-block">

						<h3>Select course</h3>

						<div class="md-form">
							<select class="custom-select">
						    	<option selected>Select course</option>
						  		<option value="1">Course One</option>
						  		<option value="2">Course Two</option>
						  		<option value="3">Course Three</option>
		            		</select>
						</div>

						<div class="md-form text-xs-center">
							<button type="button" class="btn btn-block btn-success">Enter</button>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-block">

						<h3>Student's List</h3>

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
							      <td>Tanvir Ahassan Anik</td>
							      <td>anik@iit.du.ac.bd</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Md Mehedi Hasan</td>
							      <td>mehedi@iit.du.ac.bd</td>
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

			<div class="col-sm-8">
				<div class="card">
				    <div class="card-block">

				        <!--Header-->
				        <div>
				        	<h3>Enter marks</h3>
				        </div>

				        <!-- Body -->

				        <div class="table-responsive">
				        	<table class="table table-bordered">
				        	  <thead>
				        	    <tr>
				        	      <th></th>
				        	      <th>CT Marks</th>
				        	      <th>Attendence</th>
				        	      <th>Continuous Evolution</th>
				        	      <th>Final</th>
				        	    </tr>
				        	  </thead>
				        	  <tbody>
				        	    <tr>
				        	      <th scope="row">Tanvir</th>
				        	      <td><input type="text" id="ct_marks" placeholder="enter here"></td>
				        	      <td><input type="text" id="attendence" placeholder="enter here"></td>
				        	      <td><input type="text" id="c_evo" placeholder="enter here"></td>
				        	      <td><input type="text" id="final" placeholder="enter here"></td>
				        	    </tr>
				        	    <tr>
				        	      <th scope="row">Mehedi</th>
				        	      <td><input type="text" id="ct_marks" placeholder="enter here"></td>
				        	      <td><input type="text" id="attendence" placeholder="enter here"></td>
				        	      <td><input type="text" id="c_evo" placeholder="enter here"></td>
				        	      <td><input type="text" id="final" placeholder="enter here"></td>
				        	    </tr>
				        	    <tr>
				        	      <th scope="row">Abir</th>
				        	      <td><input type="text" id="ct_marks" placeholder="enter here"></td>
				        	      <td><input type="text" id="attendence" placeholder="enter here"></td>
				        	      <td><input type="text" id="c_evo" placeholder="enter here"></td>
				        	      <td><input type="text" id="final" placeholder="enter here"></td>
				        	    </tr>
				        	    <tr>
				        	      <th scope="row">Rod</th>
				        	      <td><input type="text" id="ct_marks" placeholder="enter here"></td>
				        	      <td><input type="text" id="attendence" placeholder="enter here"></td>
				        	      <td><input type="text" id="c_evo" placeholder="enter here"></td>
				        	      <td><input type="text" id="final" placeholder="enter here"></td>
				        	    </tr>
				        	    <tr>
				        	      <th scope="row">Bod</th>
				        	      <td><input type="text" id="ct_marks" placeholder="enter here"></td>
				        	      <td><input type="text" id="attendence" placeholder="enter here"></td>
				        	      <td><input type="text" id="c_evo" placeholder="enter here"></td>
				        	      <td><input type="text" id="final" placeholder="enter here"></td>
				        	    </tr>
				        	  </tbody>
				        	</table>
				        </div>

				        <div class="float-right" align="right">
				        	<button type="button" class="btn btn-success">Submit</button>
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
