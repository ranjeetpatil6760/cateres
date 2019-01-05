
<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<!-- start: Meta -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	
	<!-- start: Mobile Specific -->
	
	<!-- end: Favicon -->
	
		
	<script src="/js/bootstrap.min.js"></script>	

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="invoice-box">
						

					<div class="invoice-header text-right">
						
						<span style="float:left;width: 20%;">
            <img src="img/logo.png"  
             width="100" height"100" />
        </span>
						
						<h4 style="font-size:16px;">अमोल साळवी <br><h5>9923296983</h5> </h4>
						<table align="right"><h4 ><tr><th style="font-size:16px;">अस्मिता  साळवी</th></h4>
							<h4 style="font-size:16px;"><th style="font-size:16px;">अनिल साळवी </th></h4></tr><tr><th><h5>9049400804</h5> </h4><th><h5>9823596983</h5></h4></tr></table></div><br><br>
						<h5 align="center"><b>967 'ई' वॉर्ड शाहूपुरी 6 वी गल्ली कोल्हापूर </b></h5>
					
				<hr style=" border-top: double ;" />
					<br>
					<div style="width: 100%">
						<div style="width: 50%; float:left;">Name: <input type="text" name=""><br>Order No: <input type="text" name=""></div>
						<div style="width: 50%; float:right;">Date:

<?PHP
$date=date("Y-m-d");

echo"<input type='date'  name='date'  id='datepicker' 
value='$date' required >";?></div>
<br> 
					
				
						

				
					<div class="invoice-body">					
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead></thead>
						  	<?php
include 'db.php';
mysqli_query($con,"SET character_set_results=utf8");  
mb_language('uni');  
mb_internal_encoding('UTF-8');  

mysqli_query($con,"set names 'utf8'"); 
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


            $result = mysqli_query($con,"SELECT * FROM item_list WHERE category='non-veg'");
							  
$rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 5;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 ?>
 <table style="height: 50%;" align="center" cellpadding="2" cellspacing="0">
      <div class="col-lg-10" style="border:1px solid black;"></div><br>  <b>नॉन-व्हेज:  </b><br> </div><br>       	<?php
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr style="width:1px">'; 
 }
                   
 echo "<td style='width: 10%;'>".$row['items']."</td>";?>
 <td >
 	
<input type="text" name="quantity" style="width: 40%;height:8px;">
</div>
</td>
<?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</tr>'; 
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Add unused column in last row
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<td>&nbsp;</td>'; 
 }
 echo '</tr>';
 }
                echo '</table><br>';
            }



            $result = mysqli_query($con,"SELECT * FROM item_list WHERE category='kirana'");
							  
$rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 5;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 ?>
 <table style="height: 50%;" align="center" cellpadding="2" cellspacing="0">
      <div class="col-lg-10" style="border:1px solid black;"></div><br>  <b>किराणा साहित्य:  </b><br> </div><br>       	<?php
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr style="width:1px">'; 
 }
                   
 echo "<td style='width: 10%;'>".$row['items']."</td>";?>
 <td >
 	
<input type="text" name="quantity" style="width: 40%;height:8px;">
</div>
</td>
<?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</tr>'; 
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Add unused column in last row
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<td>&nbsp;</td>'; 
 }
 echo '</tr>';
 }
                echo '</table><br>';
            }

            $result = mysqli_query($con,"SELECT * FROM item_list WHERE category='bakery'");
							  
$rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 5;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 ?>
<div class="col-lg-10" style="border:1px solid black;"></div><br>
 <table style="height: 50%;" align="center" cellpadding="2" cellspacing="0">
         <b>बेकरी  साहित्य: </b><br></div> <br>      	<?php
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr style="width:1px">'; 
 }
                   
 echo "<td style='width: 10%;'>".$row['items']."</td>";?>
 <td >
 	
<input type="text" name="quantity" style="width: 40%;height:8px;">
</div>
</td>
<?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</tr>'; 
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Add unused column in last row
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<td>&nbsp;</td>'; 
 }
 echo '</tr>';
 }
                echo '</table><br>';
            }

            $result = mysqli_query($con,"SELECT * FROM item_list WHERE category='bhaji'");
							  
$rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 5;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 ?>
<div class="col-lg-10" style="border:1px solid black;"></div><br>
 <table style="height: 50%;" align="center" cellpadding="2" cellspacing="0">
       <b>भाजीपाला: </b><br>  </div> <br>     	<?php
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr style="width:1px">'; 
 }
                   
 echo "<td style='width: 10%;'>".$row['items']."</td>";?>
 <td >
 	
<input type="text" name="quantity" style="width: 40%;height:8px;">
</div>
</td>
<?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</tr>'; 
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Add unused column in last row
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<td>&nbsp;</td>'; 
 }
 echo '</tr>';
 }
                echo '</table><br>';
            }
            $result = mysqli_query($con,"SELECT * FROM item_list WHERE category='fruits'");
							  
$rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 5;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 ?>
<div class="col-lg-10" style="border:1px solid black;"></div><br>
 <table style="height: 50%;" align="center" cellpadding="2" cellspacing="0">
       <b>फळे: </b><br>     </div><br>   	<?php
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr style="width:1px">'; 
 }
                   
 echo "<td style='width: 10%;'>".$row['items']."</td>";?>
 <td >
 	
<input type="text" name="quantity" style="width: 40%;height:8px;">
</div>
</td>
<?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</tr>'; 
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Add unused column in last row
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<td>&nbsp;</td>'; 
 }
 echo '</tr>';
 }
                echo '</table><br>';
            }
            $result = mysqli_query($con,"SELECT * FROM item_list WHERE category='other'");
							  
$rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 5;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 ?>
<div class="col-lg-10" style="border:1px solid black;"></div><br>
 <table style="height: 50%;" align="center" cellpadding="2" cellspacing="0">
        <b>इतर साहित्य: </b></div><br>        	<?php
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr style="width:1px">'; 
 }
                   
 echo "<td style='width: 10%;'>".$row['items']."</td>";?>
 <td >
 	
<input type="text" name="quantity" style="width: 40%;height:8px;">
</div>
</td>
<?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</tr>'; 
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Add unused column in last row
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<td>&nbsp;</td>'; 
 }
 echo '</tr>';
 }
                echo '</table>';
            }
mysqli_close($con);
?>
						  </thead>   
						  <tbody>
							
							
							
						
						  </tbody>
					  </table>  
					</div>
				</div>
				<div class="text-center">
					<button id="printPageButton" class="btn btn-default print-btn" onclick="window.print();">Print</button>
				</div>			
			</div>			
		</div>
	</div>
	
	
</body>
</html>
