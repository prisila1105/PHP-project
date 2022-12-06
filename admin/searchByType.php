<?php
    require_once('../model/constants.php');
	
	$name = $_REQUEST['name'];
	$sql = "SELECT * FROM emp_salary WHERE type LIKE '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table class='tbl-full'>
					<tr>
                        <th>ID no.</th>
                        <th>Name </th>
                        <th>Type </th>
                        <th>Email</th>
                        <th>Salary Month</th>
                        <th>Salary</th>
                        <th>Bonus</th>
                        <th>Actions</th>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['type']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['salary_month']}</td>
                            <td>{$row['salary']}</td>
                            <td>{$row['bonus']}</td>
                            
                            <td> 
                                
                                <a href='salary-update.php?id={$row['id']}' class='btn-secondary'>Update</a>
                                <a href='salary-delete.php?id={$row['id']}' name='delete' class='btn-denger'>Delete</a>
                            </td>
							
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>


