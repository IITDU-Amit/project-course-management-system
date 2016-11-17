<?php

	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];
	$sql = "SELECT * FROM question WHERE course_code='$course_code'";
	$result = mysqli_query($connection,$sql);

	$question_answer = '';

	while($row = mysqli_fetch_assoc($result)){
		
			$question_answer .= '<div class="card">
                    <!--Accordion wrapper-->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                        <!--First Question-->
                        <div class="panel panel-default">

                            <!--Panel heading-->
                            <div class="panel-heading" role="tab">
                                <h5 class="panel-title"> <strong>'.$row['name'].': </strong>'.$row['question_body'].'</h5>
                            </div>

                            <!--Panel body-->
                            <div id="answers">';

                            	$question_id = $row['question_id'];
                            	$sql2 = "SELECT * FROM answer WHERE question_id='$question_id'";
                            	$result2 = mysqli_query($connection, $sql2);

                            	while ($row2 = mysqli_fetch_assoc($result2)) {
                            		
                            		$question_answer .=	'<div>
				                            			    <p class="text-justify"> <strong>'.$row2['name'].': </strong>'.$row2['answer_body'].'</p>
				                            			</div>

				                            			<hr>';
                            	}


            $question_answer .= '<div class="md-form">
                                    <textarea type="text" id="answer-'.$row['question_id'].'" class="md-textarea"></textarea>
                                    <label for="answer">Write Answer</label>
                                </div>

                                 <div>
                                    <button type="submit" class="btn btn-purple btn-md" onclick="save_answer('.$row['question_id'].')">Submit answer</button>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>';
	}

	echo $question_answer;


?>