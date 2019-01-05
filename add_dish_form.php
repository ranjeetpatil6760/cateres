<?php include 'header.php';?>
<?php include "db.php";?>


<script src="js/jquery-1.9.1.min.js"></script>

	
  <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Add New Dish </h4>

          	<div class="row">
          	<div class="masonry-item col-md-6">
      		<div class="mT-30">
      				<form class="form-horizontal" action="" method="POST">
      					<div class="form-row">
      						<div class="form-group col-md-6">
      							<label for="inputEmail4">Add Dish:</label>
      							
      							 <input class="form-control" id="focusedInput" type="text" placeholder="Dish Name" name="dish" required="">
      						</div>
      						
      					</div>


      					
							 
							  <div class="form-actions" >
							  	
								<button type="submit" class="btn btn-primary" name="save">Save changes</button>
								<button class="btn">Cancel</button>
							
							  </div>
							</fieldset>
						  </form>
						 <?php

              include "db.php";

if(isset($_POST['save']))
{

$dish=$_POST['dish'];

//inserting in hotel_customer_info
$res = mysqli_query($con, "select * from dish_list where dish_name='$dish'");

if (mysqli_num_rows($res) > 0) 
{
  echo "<script> alert('Dish already exist')";
  echo " </script>";
      
    }
else 
    {
$qry="INSERT INTO dish_list (dish_name) VALUES ('$dish')";
if(mysqli_query($con,$qry))
{
  echo "<script> alert('Stored successfully')";
  echo " </script>";
}
else
{
  echo "<script> alert('Failed to store.Try Again!')";
  echo " </script>";
}
}

}
?>
</main>



		
	   	 <?php include 'footer.php';?>