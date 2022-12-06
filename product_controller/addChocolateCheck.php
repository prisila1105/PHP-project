<?php include('../model/constants.php'); ?>
<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['buyingPrice']) || empty($_POST['sellingPrice']) || empty($_POST['company']) || empty($_POST['entryDate']) || empty($_POST['expDate']))
		{
            $_SESSION['error'] = "Plaese fill out all the field <br>";
			header('location: ../seller/add-chocolates.php');
        }
        else{
            //validation check 1
            
            $temp_exp=explode('-', $_POST['expDate']);

            if ($temp_exp[0]>2024) {
                $_SESSION['adob'] = "Please select year before 2024 <br>";
				header('location: ../seller/add-chocolates.php');
            }
            else{
                $name = $_POST['name'];
	 			$buyingPrice = $_POST['buyingPrice'];
				$sellingPrice=($_POST['sellingPrice']);
	 			$company = $_POST['company'];
	 			$entryDate = $_POST['entryDate'];
	 			$expDate = $_POST['expDate'];
	 			$discount = $_POST['discount'];
                
                //validation check 2
                $error=false;

                if(strlen($name)<3){
                   // echo "name must contain at least 3 charecters<br>";
					$_SESSION['pname'] = "name must contain at least 3 charecters"; 
					header('location: ../seller/add-chocolates.php');
                    $error=true;
                }
                if(strpos($name, '!') || strpos($name, '@') || strpos($name, '#') || strpos($name, '%') || strpos($name, '&')){
                    //echo "name cannot contain any special charecter<br>";
					$_SESSION['pname'] = "name cannot contain any special charecter"; 
					header('location: ../seller/add-chocolates.php');
                    $error=true;
                }
               /* if(strlen($aphonenumber)<11 || strlen($aphonenumber)>11 ){
                    //echo "phone no. must contain 11 digit <br>";
					$_SESSION['aname'] = "phone no. must contain 11 digit"; 
					header('location: ../admin/add-admin.php');
                    $error=true;
                }
                if(strlen($apassword)<6){
                    //echo "password must contain at least 6 charecters <br>";
					$_SESSION['aname'] = "password must contain at least 6 charecters"; 
					header('location: ../admin/add-admin.php');
                    $error=true;
                }
                if(!strpos($apassword, '0') and !strpos($apassword, '1') and !strpos($apassword, '2') and !strpos($apassword, '3') and !strpos($apassword, '4') and !strpos($apassword, '5') and !strpos($apassword, '6') and !strpos($apassword, '7') and !strpos($apassword, '8') and !strpos($apassword, '9')){
                    //echo "password must contain atleast one number  <br>";
					$_SESSION['aname'] = "password must contain atleast one number"; 
					header('location: ../admin/add-admin.php');
                    $error=true;
                }
				if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/",$aemail)) {
	
					$_SESSION['aemail'] = "Email: Invalid email format <br>";
					header('location: ../admin/add-admin.php');
					$error=true;
		
				}*/
                
                elseif($error==false){
                    //Sql quary to save the data into database
	
					$sql = "INSERT INTO chocolates_product SET
					id = '',
					name = '$name',
					buyingPrice = '$buyingPrice',
					sellingPrice = '$sellingPrice',
					company = '$company',
					entryDate = '$entryDate',
					expDate = '$expDate',
					discount = '$discount'
					";

					//Executing quary and saving data into data base
					$res = mysqli_query($conn, $sql) or die(mysqli_error());
					
					//check whether the data 
	
					if($res==TRUE)
					{
						//echo "data inserted";
						$_SESSION['add'] = "Admin Added Successfully <br>";
	
						header('location: ../seller/chocolates.php');
					}
					else
					{
						echo "failed";
					}
                }

            }

            
        }
    }

?>