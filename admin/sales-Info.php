<?php include('menu.php'); ?>
<script src="../js/searchSalesInfo.js"></script>
    
    
    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Sales Information</h1>  
            <form  class="text-center">
                <input type="search" name="name" id="name" class="search" placeholder="Search By Name" onkeyup="ajax()">
                
                

            </form>
         
            <br/><br/><br/>
            <div class="result" id='result'>
            
            <?php 
		        echo "<table class='tbl-full'>
		        <tr>
                    <th>Serial no.</th>
                    <th>Product Name </th>
                    <th>Product Catagory </th>
                    <th>Sale price </th>
                    <th>Vat </th>
                    <th>Date </th>
		        </tr>";
                $sn=1;
	
		        $row = displayAllSales($conn);
            ?>
            
            <?php
		        foreach($row as $var){
                
			    echo "
                
				<tr>
                <td>{$var['id']}</td>
                <td>{$var['name']} </td>
                <td>{$var['catagory']}</td>
                <td>{$var['price']}</td>
                <td>{$var['vat']}</td>
                <td>{$var['date']}</td>
                </tr>
                
						
				";
				
			
		}

			echo "</table>";
?>
</div>

            

                
    <!--Menu Contact Section ends -->



    <?php include('footer.php'); ?>