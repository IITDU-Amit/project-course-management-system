<?php

	include '../../connect/connect.php';

	$course_code = $_POST['course_code'];

  date_default_timezone_set('Asia/Dhaka');
  $current_date = date("Y-m-d");

  $sql = "SELECT start_date, end_date FROM course WHERE course_code='$course_code'";
  $result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($result);

  $start_date = $row['start_date'];
  $end_date = $row['end_date'];

  if(($current_date < $start_date) || ($current_date>$end_date)){

    echo "Sorry";
    
  }

  else {

    	$numbersheet = '<div class="card">
                        <div class="card-block">

                            <!--Header-->

                            <div class="row">
                              <div class="col-sm-4">
                                <h3>Enter/Edit Marks</h3>
                                <h3>'.$course_code.'</h3>
                                <input type="hidden" id="numbersheet_course_code" value="'.$course_code.'"/>
                              </div>
                              <div class="col-sm-8" align="right">

                                <button type="button" class="btn btn-success waves-effect waves-light" onclick="create_csv()">Download as CSV</button>
                                <button type="button" class="btn btn-success waves-effect waves-light" onclick="save_marks()">Save Marks</button>

                              </div>
                            </div>

                            <!-- Body -->

                            <div class="table-responsive" id="marks_table">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Name</th>';


    	$sql = "SELECT * FROM marks_distribution WHERE course_code='$course_code' ORDER BY distribution_weight ASC";
    	$result = mysqli_query($connection, $sql);
    	while ($row = mysqli_fetch_assoc($result)) {
        
        $viewable = $row['viewable'];

    		$numbersheet .= '<th>
        
        <input type="hidden" name="distribution_id[]" value="'.$row['distribution_id'].'"/>
        <input type="hidden" name="distribution_weight[]" value="'.$row['distribution_weight'].'"/>
        <input type="hidden" name="distribution_criteria[]" value="'.$row['distribution_criteria'].'"/>

        '.$row['distribution_criteria'].' ('.$row['distribution_weight'].')<br/>
            
            <div class="switch">
              <label>
                Off
                <input type="checkbox" name="viewable[]" value='.$viewable.' '.($viewable == 1 ? 'checked="checked"':'').'>
                <span class="lever"></span>
                On
              </label>
            </div>

          </th>';

    	}

    	$numbersheet .='</tr>
                                  </thead>
                                  <tbody>';

    	$sql = "SELECT * FROM student_allocation WHERE course_code='$course_code'";
    	$result = mysqli_query($connection, $sql);

    	while ($row = mysqli_fetch_assoc($result)) {

    		$student_id = $row['student_id'];
    		$sql2 = "SELECT name FROM student WHERE student_id='$student_id'";
    		$result2 = mysqli_query($connection, $sql2);
    		$row2 = mysqli_fetch_assoc($result2);

    		$numbersheet .= '		<tr>
                                      <td scope="row"><input type="hidden" name="student_id[]" value="'.$student_id.'"/>'.$row2['name'].'</td>';

            $sql3 = "SELECT * FROM marks_distribution WHERE course_code='$course_code' ORDER BY distribution_weight ASC";
            $result3 = mysqli_query($connection, $sql3);

            while ($row3 = mysqli_fetch_assoc($result3)) {

            	$distribution_id = $row3['distribution_id'];
              $sql4 = "SELECT mark FROM marks WHERE course_code='$course_code' AND student_id='$student_id' AND distribution_id='$distribution_id'";
              $result4 = mysqli_query($connection,$sql4);
              $row4 = mysqli_fetch_assoc($result4);

            	$numbersheet .= 	  '<td><input type="number" name="marks[]" value="'.$row4['mark'].'"/></td>';

            }
                $numbersheet .=		'</tr>';

    	}

    	
        $numbersheet .=				'</tbody>
                                </table>
                            </div>
                        </div>
                    </div>';

        echo $numbersheet;

  }

?>