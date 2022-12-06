<?php include('menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>Update INFORMATION</h1>
            <br/><br/>
            <form action="../controller/seetingUpdateCheck.php" method="post">
                <table class="tbl-80">
                    <tr>
                        <td>Name </td>
                        <td>:<input type="text" name="name" value="<?php echo $_SESSION['name']?>"> </td>
                        <td rowspan=8 align="center">
                        <img src="<?php echo $_SESSION['profilePicture']?>" height="200px" width="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Type </td>
                        <td>: <?php echo $_SESSION['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>: <input type="text" name="gender" value="<?php echo $_SESSION['gender']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: <input type="text" name="email" value="<?php echo $_SESSION['email']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <input type="text" name="phone" value="<?php echo $_SESSION['phone']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <input type="text" name="address" value="<?php echo $_SESSION['address']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>:  <input type="text" name="dob" value="<?php echo $_SESSION['dob']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
                            <input type="submit" name="submit" value="SAVE" class="btn-secondary">                       
                        </td>
                    </tr>
                    
                </table>


            </form>
            
            

        </div>
    </div>

<?php include('footer.php'); ?>