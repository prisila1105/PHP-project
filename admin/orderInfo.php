<?php include('menu.php'); ?>

    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Order</h1>
            <br/><br/>
            <?php
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
            
            ?> 

            <br/>
            
            <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            } 

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['valid']))
            {
                echo $_SESSION['valid'];
                unset($_SESSION['valid']);
            }

            if(isset($_SESSION['not-valid']))
            {
                echo $_SESSION['not-valid'];
                unset($_SESSION['not-valid']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            
            ?>


            <br/>

            <table  class="tbl-full">
                <tr>
                    <th>ID no.</th>
                    <th>Product </th>
                    <th>Price </th>
                    <th>Qty </th>
                    <th>Total </th>
                    <th>Order Date </th>
                    <th>Status </th>
                    <th>Customer Name </th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>

                <?php
                    //Quary to get all tbl_order
                    $sql = "SELECT * FROM tbl_order";
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
                                $product = $rows['product'];
		                        $price = $rows['price'];
	                        	$qty = $rows['qty'];
	                        	$total = $rows['total'];
	                        	$order_date = $rows['order_date'];
	                        	$status = $rows['status'];
	                        	$customer_name = $rows['customer_name'];
	                        	$customer_contact = $rows['customer_contact'];
	                        	$customer_email = $rows['customer_email'];
	                        	$customer_address = $rows['customer_address'];

                                //display the values in table
                                ?>

                                    <tr>
                                        <td><?php echo  $sn++; ?></td>
                                        <td><?php echo  $product; ?> </td>
                                        <td><?php echo  $price; ?></td>
                                        <td><?php echo  $qty; ?></td>
                                        <td><?php echo  $total; ?></td>
                                        <td><?php echo  $order_date; ?></td>
                                        <td>
                                            <?php
                                                if($status=="On Delivery")
                                                {
                                                    echo" <label style='color:green;'>$status</label>";
                                                }
                                                elseif($status=="Ordered")
                                                {
                                                    echo" <label style='color:blue;'>$status</label>";
                                                }
                                                elseif($status=="Delevered")
                                                {
                                                    echo" <label>$status</label>";
                                                }
                                                elseif($status=="Cancelled")
                                                {
                                                    echo" <label style='color:red;'>$status</label>";
                                                }

                                            
                                            ?>
                                        </td>
                                        <td><?php echo  $customer_name; ?></td>
                                        <td><?php echo  $customer_contact; ?></td>
                                        <td><?php echo  $customer_email; ?></td>
                                        <td><?php echo  $customer_address; ?></td>
                                        <td>
                                            <a href="order-update.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                            
                                        </td>
                
                                    </tr>

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