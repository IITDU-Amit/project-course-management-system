<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | IITDU | Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<div id="student_list" class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="card">
					<div class="card-block">

						<h3>Student List</h3>

						<div class="table-responsive">
							<table class="table table-hover">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Student Id</th>
							      <th>Name</th>
							      <th>Email</th>
							      <th>Contact</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>0601</td>
							      <td>Arafat</td>
							      <td>arafat@gmail.com</td>
							      <td>01518557878</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>0602</td>
							      <td>Himel</td>
							      <td>himel@gmail.com</td>
							      <td>01718557879</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>0603</td>
							      <td>Zafar</td>
							      <td>zafar@gmail.com</td>
							      <td>01518357848</td>
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
				        	<h3>Add new student</h3>
				        </div>

				        <!--Body-->

				        <div class="md-form">
				            <input type="text" id="name" class="form-control">
				            <label for="name">Name</label>
				        </div>

				        <div class="md-form">
				            <input type="text" id="email" class="form-control">
				            <label for="email">Email</label>
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
				        	<h3>Remove student</h3>
				        </div>

				        <!--Body-->

				        <div class="md-form">
				            <input type="text" id="email" class="form-control">
				            <label for="email">Email</label>
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
