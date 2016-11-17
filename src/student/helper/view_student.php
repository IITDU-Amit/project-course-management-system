<?php

	include '../../connect/connect.php';

	$list = '<div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Contact</th>
                                </tr>
                              </thead>
                              <tbody>';

	$sql = "SELECT * FROM student ORDER BY email ASC";
	$result = mysqli_query($connection, $sql);

	$serial = 1;

	while ($row = mysqli_fetch_assoc($result)) {
	    
	    $list.= '<tr>
	              <th scope="row">'.$serial.'</th>
	              <td>'.$row['name'].'</td>
	              <td>'.$row['email'].'</td>
	              <td>'.$row['contact'].'</td>
	            </tr>';
	    $serial++;                                    
	}

	$list.= '</tbody>
                            </table>
                        </div>';

	echo $list;

?>