<?php include('menu.php'); ?>

    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1> Add Vat & Offers</h1> 

            

            <br/>
            
            <?php

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            
            
            ?>


            <br/><br/><br/>

    

            <table  class="tbl-full">
                

                <?php
                    //Quary to get all admin
                    $sql = "SELECT * FROM allproduct";
                    //Execute the quary
                    $res = mysqli_query($conn, $sql);
                    
                    //check the query 
                    if($res==TRUE)
                    {
                        //count Rows to check the data base
                        $count = mysqli_num_rows($res);

                        //create a variable
                        $sn=1; 

                        //Check the nymber of rows
                        if($count>0)
                        {
                            //we have data in databae
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //using whileloop to get tahe data
                                //And while loop will run as wel as we have data

                                //get individual data
                                $id = $rows['id'];
                                $name = $rows['name'];
		                        $company = $rows['company'];
	                        	$catagory = $rows['catagory'];
	                        	$entryDate = $rows['entryDate'];
	                        	$expDate = $rows['expDate'];
	                        	$buyPrice = $rows['buyPrice'];
	                        	$salePrice = $rows['salePrice'];
	                        	$discount = $rows['discount'];
	                        	$vat = $rows['vat'];

                                //display the values in table
                                ?>
                                <div class="col-4 text-center">
                                    <form action="../controller/vatOfferCheck.php?id={$var['id']}" method="post">
                                        <b>Product Name</b> <br/> <?php echo  $name; ?> <br/>
                                        <b>Including Vat</b> <br/> </b><input type="text" name="vat" value="<?php echo  $vat;?>"> <br/>
                                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                                        <input type="submit" name="submit" value="ADD" class="btn-secondary">
                                       
                                    </form>
                                        
                                            
                                </div>
                                        
                                        

                                <?php
                            }
                        }
                        else
                        {
                            //We do not have any datavase

                        }

                    }
                
                ?>
            </table>

            

        </div>
    </div>

    <!--Menu Contact Section ends -->

    <?php include('footer.php'); ?>