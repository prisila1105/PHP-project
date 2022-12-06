<?php
    require_once('../model/constants.php');
	
	$name = $_REQUEST['name'];
	$sql = "SELECT * FROM sales_unit WHERE name LIKE '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table class='tbl-full'>
					<tr>
                        <th>Serial no.</th>
                        <th>Product Name </th>
                        <th>Product Catagory </th>
                        <th>Sale price </th>
                        <th>Vat </th>
                        <th>Date </th>
                        
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['catagory']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['vat']}</td>
                            <td>{$row['date']}</td>
                            
                            
							
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>


