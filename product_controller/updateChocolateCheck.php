<?php include('../model/constants.php'); ?>
<?php 
	//Check weather the submit button is clicked

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
		$name = $_POST['name'];
	 	$buyingPrice = $_POST['buyingPrice'];
		$sellingPrice=($_POST['sellingPrice']);
	 	$company = $_POST['company'];
	 	$entryDate = $_POST['entryDate'];
	 	$expDate = $_POST['expDate'];
	 	$discount = $_POST['discount'];
		

		//Sql quary to save the data into database

		$sql = "UPDATE chocolates_product SET
			name = '$name',
			buyingPrice = '$buyingPrice',
			sellingPrice = '$sellingPrice',
			company = '$company',
			entryDate = '$entryDate',
			expDate = '$expDate',
			discount = '$discount'
			WHERE id='$id'
		";
		
		//Executing quary and saving data into data base
		$res = mysqli_query($conn, $sql);

		//check whether the data 

		if($res==TRUE)
		{
			//echo "data inserted";
			$_SESSION['update'] = "<div class='success'>Product Updated Successfully</div> ";

			header('location: ../seller/chocolates.php');
		}
		else
		{
			$_SESSION['update'] = "<div class='error'>Product Updated Failed. Please Try Again....</div> ";

			header('location: ../seller/chocolates.php');
		}


	}

?>