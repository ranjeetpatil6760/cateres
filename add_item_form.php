<?php include 'header.php';?>
<?php include "db.php";?>


<script src="js/jquery-1.9.1.min.js"></script>

	
  <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Add New Item </h4>

          	<div class="row">
          	<div class="masonry-item col-md-6">
      		<div class="mT-30">
      				<form class="form-horizontal" action="" method="POST">
      					<div class="form-row">
      						<div class="form-group col-md-6">
      							<label for="inputEmail4">Add Item:</label>
      							
      							 <input class="form-control" id="focusedInput" type="text" placeholder="Item  Name" name="item" required="">
      						</div>
      						
      					
                    
 <div class="form-group col-md-2">  
<label for="selectError" class="fw-500">Category</label>


<div id="itemRows1">
<select id="selectError1" class="form-control" data-rel="chosen" name="category">

  <option>other</option>
  <option>non-veg</option>
  <option>kirana</option>
  <option>bakery</option>
  <option>bhaji</option>
  <option>fruits</option>

</select>

</div> 

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

$item=$_POST['item'];
$category= $_POST['category'];

$res = mysqli_query($con, "select * from item_list where items=N'$item'");

if (mysqli_num_rows($res) > 0) 
{
  echo "<script> alert('Item already exist')";
  echo " </script>";
      
    }
else 
    {

//inserting in hotel_customer_info
$qry="INSERT INTO item_list (items,category) VALUES (N'$item','$category')";
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
