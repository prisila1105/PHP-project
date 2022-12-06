<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Update Product</h1>

        <?php
            $id = $_GET['id'];

            $status= displayallproductbyID($id, $conn);
        
        ?>

        <form action="../controller/updateProductCheck.php" method="post">
            <table class="tbl-30">
            <tr>
                    <td>Product Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo $status['name'] ?>"></td>
                </tr>

                <tr>
                    <td>Company: </td>
                    <td> <input type="text" name="company" value="<?php echo  $status['company'] ?>"></td>
                </tr>

                
                <tr>
                    <td>Catagory: </td>
                    <td> <input type="text" name="catagory" value="<?php echo  $status['catagory'] ?>"></td>
                </tr>

                <tr>
                    <td>Entry Date: </td>
                    <td> <input type="date" name="entryDate" value="<?php echo  $status['entryDate'] ?>"></td>
                </tr>

                <tr>
                    <td>Exp. Date: </td>
                    <td> <input type="date" name="expDate" value="<?php echo  $status['expDate'] ?>"></td>
                </tr>

                <tr>
                    <td>Buying Price: </td>
                    <td> <input type="text" name="buyPrice" value="<?php echo  $status['buyPrice'] ?>"></td>
                </tr>

                <tr>
                    <td>Saling Price: </td>
                    <td> <input type="text" name="salePrice" value="<?php echo  $status['salePrice'] ?>"></td>
                </tr>

                <tr>
                    <td>Discount: </td>
                    <td> <input type="text" name="discount" value="<?php echo  $status['discount'] ?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value=" Update Product" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>