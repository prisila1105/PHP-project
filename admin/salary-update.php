<?php include('menu.php'); ?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Update Salary</h1>

        <?php 
            //get the id of selected Admin
            $id = $_GET['id'];

            $status= displayemp_salarybyID($id, $conn);
        
        ?>

        <form action="../controller/updateSalaryCheck.php" method="post">
            <table class="tbl-30">
            <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo $status['name'] ?>"></td>
                </tr>

                <tr>
                    <td>Type: </td>
                    <td> <input type="text" name="type" value="<?php echo $status['type'] ?>"></td>
                </tr>

                
                <tr>
                    <td>Email: </td>
                    <td> <input type="email" name="email" value="<?php echo $status['email'] ?>"></td>
                </tr>

                <tr>
                    <td>Salary Month: </td>
                    <td> <input type="text" name="month" value="<?php echo $status['salary_month'] ?>"></td>
                </tr>

                <tr>
                    <td>Salary: </td>
                    <td> <input type="text" name="salary" value="<?php echo $status['salary'] ?>"></td>
                </tr>

                <tr>
                    <td>Bonus: </td>
                    <td> <input type="text" name="bonus" value="<?php echo $status['bonus'] ?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value=" Update Salary" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php include('footer.php'); ?>