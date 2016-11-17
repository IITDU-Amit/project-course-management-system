<?php

    include '../../connect/connect.php';

    $course_code = $_POST['course_code'];

    $data = '<input type="hidden" id="delete_distribution_course_code" value="'.$course_code.'">
            <div class="table-responsive">
                            <table class="table">
                                <tbody>';

    $sql = "SELECT * FROM marks_distribution WHERE course_code='$course_code' ORDER BY distribution_weight ASC";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
    	
    	$data .= '<tr>
                    <td>'.$row['distribution_criteria'].'</td>
                    <td>'.$row['distribution_weight'].'</td>
                  </tr>';
    }

    $data .=' 		</tbody>
                </table>
            </div>';

    echo $data;
?>
