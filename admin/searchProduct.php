<?php
    require_once('../model/constants.php');
	
	$name = $_REQUEST['name'];
	$sql = "SELECT * FROM allproduct WHERE name LIKE '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table class='tbl-full'>
					<tr>
                        <th>ID no.</th>
                        <th>Product Name </th>
                        <th>Company </th>
                        <th>Catagory </th>
                        <th>Entry Date </th>
                        <th>Exp. Date </th>
                        <th>Buying Price </th>
                        <th>Saling Price </th>
                        <th>Discount </th>
                        <th>Actions</th>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['company']}</td>
                            <td>{$row['catagory']}</td>
                            <td>{$row['entryDate']}</td>
                            <td>{$row['expDate']}</td>
                            <td>{$row['buyPrice']}</td>
                            <td>{$row['salePrice']}</td>
                            <td>{$row['discount']}</td>
                            <td> 
                                <a href='product-update.php?id={$row['id']}' class='btn-secondary'>Update</a>
                                <a href='product-delete.php?id={$row['id']}' name='delete' class='btn-denger'>Delete</a>
                            </td>
							
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>


