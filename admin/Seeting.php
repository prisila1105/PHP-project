<?php include('menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>INFORMATION</h1>
            <?php
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
            
            ?>
            <br/><br/>
            <form action="" method="post">
                <table class="tbl-80">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $_SESSION['name']?></td>
                        <td rowspan=8 align="center">
                            <img src="<?php echo $_SESSION['profilePicture']?>" height="200px" weidth="200px" alt=""><br>
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
                        <td>: <?php echo $_SESSION['gender']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $_SESSION['email']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <?php echo $_SESSION['phone']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <?php echo $_SESSION['address']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>:<?php echo $_SESSION['dob']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>
                        <a href="cng-pass-addmin-profile.php?id=<?php echo $_SESSION['id']?>" class="btn-secondary">Change Password</a>
                        <a href="seeting-update.php?id=<?php echo $_SESSION['id']?>" class="btn-secondary">Update</a>                        
                        </td>
                    </tr>
                    
                </table>


            </form>
            
            

        </div>
    </div>

<?php include('footer.php'); ?>