<?php
    require_once('../model/constants.php');
	
	$name = $_REQUEST['name'];
	$sql = "SELECT * FROM admin WHERE name LIKE '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table class='tbl-full'>
					<tr>
                        <th>ID no.</th>
                        <th>Name </th>
                        <th>Profile Picture </th>
                        <th>Password </th>
                        <th>Date of Birth </th>
                        <th>Gender </th>
                        <th>Email </th>
                        <th>Phone </th>
                        <th>Address </th>
                        <th>Actions</th>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td> <img src='{$row['profilePicture']}' height='100' width='100'>   </td>
                            <td>{$row['password']}</td>
                            <td>{$row['dob']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['address']}</td>
                            <td> 
                                <a href='admin-update-password.php?id={$row['id']}' class='btn-primary'>Change Password</a> </br>
                                <a href='admin-update.php?id={$row['id']}' class='btn-secondary'>Update</a>
                                <a href='../controller/admin-delete-check.php?id={$row['id']}' name='delete' class='btn-denger'>Delete</a>
                            </td>
							
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>


