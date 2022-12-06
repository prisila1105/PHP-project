<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Update Order</h1>

        <?php
            $id = $_GET['id'];

            $status= displayOrderInfobyID($id, $conn);
        
        ?>
        

        <form action="../controller/updateOrderCheck.php" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Product: </td>
                    <td><b><?php echo $status['product'] ?></b> </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td><b><?php echo $status['price'] ?></b> </td>
                </tr>

                
                <tr>
                    <td>Qty: </td>
                    <td> <input type="text" name="qty" id="" value="<?php echo $status['qty'] ?>"></td>
                </tr>

                <tr>
                    <td>Total: </td>
                    <td> 
                        <input type="text" name="total" value="<?php echo $status['total'] ?>" class="input-responsive" required>
                    </td>
                </tr>

                <tr>
                    <td>Order Date: </td>
                    <td> <input type="text" name="order_date" id="" value="<?php echo $status['order_date'] ?>"></td>
                </tr>

                <tr>
                    <td>Status: </td>
                    <td> 
                        <select name="status" id="">
                            <option style="color:green;" value="On Delivery">On Delivery</option>
                            <option style="color:blue;" value="Ordered">Ordered</option>
                            <option value="Delevered">Delevered</option>
                            <option style="color:red;" value="Cancelled">Cancelled</option>
                        </select>
                    
                    
                    </td>
                </tr>

                <tr>
                    <td>Customer Name: </td>
                    <td> <input type="text" name="customer_name" id="" value="<?php echo $status['customer_name'] ?>"></td>
                </tr>

                <tr>
                    <td>Phone: </td>
                    <td> <input type="text" name="customer_contact" value="<?php echo $status['customer_contact'] ?>"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td> <input type="text" name="customer_email" value="<?php echo $status['customer_email'] ?>"></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td> <textarea name="customer_address" value="" rows="5" cols="30"><?php echo $status['customer_address'] ?></textarea></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value=" Update" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>