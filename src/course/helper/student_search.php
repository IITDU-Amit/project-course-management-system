<?php

    include '../../connect/connect.php';

    $course_code = $_POST['course_code'];
    $search_data = $_POST['search_data'];

    $search_result = '';

    $sql = "SELECT * FROM student WHERE email LIKE '%$search_data%' AND student_id NOT IN (SELECT student_id FROM student_allocation WHERE course_code='$course_code')";

    $result = mysqli_query($connection, $sql);

    $num_rows = mysqli_num_rows($result);

    if ($num_rows==0) {

        echo '<div class="card card-footer danger-color-dark waves-effect waves-light">
                <h3 class="flex-center no_student">No student found!</h3>
            </div>';
    
    }

    else {

        $search_result = '<div align="right">
                            <button class="btn btn-success" onclick="assign_student()">Done</button>    
                        </div>

                        <fieldset class="form-group">
                            <input type="checkbox" id="select_all">
                            <label for="select_all">Select All</label>
                        </fieldset>';

        while ($row = mysqli_fetch_assoc($result)) {

            $search_result.= '<fieldset class="form-group">
                                <input class="checkbox" type="checkbox" id="'.$row['student_id'].'" name="student_id[]" value="'.$row['student_id'].'">
                                <label for="'.$row['student_id'].'">'.$row['name'].'</label>
                              </fieldset>';
                                      
            }

        echo $search_result;
    }

?>