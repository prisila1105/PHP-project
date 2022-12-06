<?php include('menu.php'); ?>
<script src="../js/searchByType.js"></script>
    
    
    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Empolyee Salary Information</h1>  
            <form  class="text-center">
                <input type="search" name="name" id="name" class="search" placeholder="Search By Type" onkeyup="ajax()">
            </form>
            

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


            <br/><br/><br/>

            <!-- Button to add Salary -->
            <a href="add-salary.php" class="btn-primary">Add Empolyee Salary</a> 
            
            
            <br/><br/><br/>
            <div class="result" id='result'>
            
            <?php 
		        echo "<table class='tbl-full'>
		        <tr>
                    <th>ID no.</th>
                    <th>Name </th>
                    <th>Type </th>
                    <th>Email</th>
                    <th>Salary Month</th>
                    <th>Salary</th>
                    <th>Bonus</th>
                    <th>Actions</th>
		        </tr>";
                $sn=1;
	
		        $row = displayEmpSalary($conn);
            ?>
            
            <?php
		        foreach($row as $var){
                
			    echo "
                
				<tr>
                <td>{$var['id']}</td>
                <td>{$var['name']} </td>
                <td>{$var['type']}</td>
                <td>{$var['email']}</td>
                <td>{$var['salary_month']}</td>
                <td>{$var['salary']}</td>
                <td>{$var['bonus']}</td>
                <td>
                    <a href='salary-update.php?id={$var['id']}' class='btn-secondary'>Update</a>
                    <a href='salary-delete.php?id={$var['id']}' name='delete' class='btn-denger'>Delete</a>
                    
                </td>
                </tr>
                
						
				";
				
			
		}

			echo "</table>";
?>
</div>

            

                
    <!--Menu Contact Section ends -->



    <?php include('footer.php'); ?>