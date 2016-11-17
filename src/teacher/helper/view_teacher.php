<?php

	include '../../connect/connect.php';

	$list = '<div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>';

	$sql = "SELECT * FROM user WHERE user_type='teacher'";
	$result = mysqli_query($connection, $sql);

	$serial = 1;

	while ($row = mysqli_fetch_assoc($result)) {
	    
	    $list.= '<tr>
	              <th scope="row">'.$serial.'</th>
	              <td>'.$row['name'].'</td>
	              <td>'.$row['email'].'</td>
	            </tr>';
	    $serial++;                                    
	}

	$list.= '</tbody>
                            </table>
                        </div>';

	echo $list;

?>