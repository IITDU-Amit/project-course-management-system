<?php

	include '../../connect/connect.php';

	$deadlinelist = '<div class="card">
                    <div class="card-block">

                        <!--Header-->

                        <div class="row">
                            <h3 class="flex-center">Marks Entry Date</h3>
                        </div>

                        <!-- Body -->

                        <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                	<th>Course Name</th>
                                	<th>Start Date</th>
                                	<th>End Date</th>
                                </tr>
                               </thead>
                               <tbody>';

    $sql = "SELECT * FROM course";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
    	
    	$deadlinelist .= '<tr>
    						<td>'.$row['course_name'].'</td>
    						<td>'.$row['start_date'].'</td>
    						<td>'.$row['end_date'].'</td>
    					  </tr>';
    }

    echo $deadlinelist;

?>