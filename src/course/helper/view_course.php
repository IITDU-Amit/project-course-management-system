<?php

    include '../../connect/connect.php';

    $list = '';

    $sql = "SELECT * FROM course";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $user_id = $row["user_id"];

        $sql2 = "SELECT * FROM user WHERE user_id='$user_id'";
        $result2 = mysqli_query($connection, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        $list.= '<div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Course : '.$row['course_name'].'</h5>
                        </div>
                        <div class="card-header">
                            <h5>Code : '.$row['course_code'].'</h5>
                        </div>
                        <div class="card-block course_description">
                            <p class="card-text">'.$row['course_description'].'</p>
                        </div>
                        <div class="card">
                             <div class="card-header">
                                 <h5>Teacher : '.$row2['name'].'</h5>
                             </div>
                        </div>
                        
                    </div>
                </div>';
                              
    }

    echo $list;

?>