<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | IITDU | Course Discussion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<div id="discussion" class="container-fluid">
		<div class="card card-block" align="center">
			<h3 class="card-title">Course Name: Course A</h3>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="card">
					<!--Accordion wrapper-->
					<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

					    <!--First Question-->
					    <div class="panel panel-default">

					        <!--Panel heading-->
					        <div class="panel-heading" role="tab" id="questionOne">
					            <h5 class="panel-title">
									<a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Q1. What is an Operating System?<i class="fa fa-angle-down rotate-icon"></i>
									</a>
								</h5>
					        </div>

					        <!--Panel body-->
					        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">

					        	<!-- Answer-1 -->
					            <div>
					            	<h5 style="font-weight: bold;">Anik: </h5>
					            	<p class="text-justify">
					            		An operating system (OS) is system software that manages computer hardware and software resources and provides common services for computer programs. All computer programs, excluding firmware, require an operating system to function. Time-sharing operating systems schedule tasks for efficient use of the system and may also include accounting software for cost allocation of processor.
					            	</p>
					            </div>

					            <!-- Answer-2 -->
					            <div>
					            	<h5 style="font-weight: bold;">Tawsif: </h5>
					            	<p class="text-justify">
					            		Its nothing but normal Os that can operate a machine in a very efficeint way that can handle the risk.
					            	</p>
					            </div>
					            <hr>
					            <div class="md-form">
					            	<textarea type="text" id="answer_for_q1" class="md-textarea"></textarea>
					            	<label for="answer_for_q1">write an answer</label>
					            </div>

					             <div>
					                <button type="submit" class="btn btn-purple btn-md">Submit answer</button>
					             </div>
					        </div>
					    </div>
					    <!--/.First question-->

					    <!--Second Question-->
					    <div class="panel panel-default">

					        <!--Panel heading-->
					        <div class="panel-heading" role="tab" id="questionTwo">
					            <h5 class="panel-title">
									<a class="arrow-r" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Q2. What is an Normal OS?<i class="fa fa-angle-down rotate-icon"></i>
									</a>
								</h5>
					        </div>

					        <!--Panel body-->
					        <div id="collapseTwo" class="panel-collapse collapse" role="tabpane1" aria-labelledby="questionTwo">
					            <h5 style="font-weight: bold;">Jamil: </h5>
					            <p class="text-justify">
					            	An operating system (OS) is system software that manages computer hardware and software resources and provides common services for computer programs. All computer programs, excluding firmware.
					            </p>
					            <hr>
					            <div class="md-form">
					            	<textarea type="text" id="answer_for_q2" class="md-textarea"></textarea>
					            	<label for="answer_for_q2">write an answer</label>
					            </div>

					             <div>
					                <button type="submit" class="btn btn-purple btn-md">Submit answer</button>
					             </div>
					        </div>
					    </div>
					    <!--/.Second question-->
					</div>
					<!--/.Accordion wrapper-->
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card">
				    <div class="card-block">

				        <!--Header-->
				        <div>
				        	<h3>Ask question</h3>
				        </div>

				        <!--Body-->

				      	<div class="md-form">
				      	    <textarea type="text" id="question" class="md-textarea"></textarea>
				      	    <label for="question">Question </label>
				      	</div>

				        <div class="text-xs-center">
				            <button class="btn btn-success btn-block"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
