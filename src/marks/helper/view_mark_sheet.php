<?php

	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];
  $student_id = $_POST['student_id'];

	$marksheet = '<div class="card">
                    <div class="card-block">

                        <!--Header-->

                        <div class="row">
                            <h3 class="flex-center">'.$course_code.'</h3>
                        </div>

                        <!-- Body -->

                        <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>';


	$sql = "SELECT * FROM marks_distribution WHERE course_code='$course_code' AND viewable='1' ORDER BY distribution_weight ASC";
	$result = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
		
		$marksheet .= '<th>'.$row['distribution_criteria'].' ('.$row['distribution_weight'].')</th>';

	}

	$marksheet .='</tr>
                              </thead>
                              <tbody>
                              <tr>';

  $sql3 = "SELECT * FROM marks_distribution WHERE course_code='$course_code' AND viewable='1' ORDER BY distribution_weight ASC";
  $result3 = mysqli_query($connection, $sql3);

  while ($row3 = mysqli_fetch_assoc($result3)) {

    $distribution_id = $row3['distribution_id'];

    $sql4 = "SELECT mark FROM marks WHERE course_code='$course_code' AND student_id='$student_id' AND distribution_id='$distribution_id'";
    $result4 = mysqli_query($connection,$sql4);
    $row4 = mysqli_fetch_assoc($result4);
    $marksheet .= 	  '<td>'.$row4['mark'].'</td>';

  }
      $marksheet .=		'</tr>';

	
    $marksheet .=				'</tbody>
                            </table>
                        </div>
                    </div>
                </div>';

    echo $marksheet;

?>