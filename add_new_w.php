<?php include 'header.php';?>
<?php include "db.php";?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
   
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Add new Worker </h4>

<form method="post" action="">
<div class="form-row">
	


<div class="masonry-item col-md-4">
        
            
            <div class="mT-30">
            
                <div class="form-group">
                  <label for="focusedInput">Name</label>
                   <input class="form-control" type="text" placeholder="Name" name="name" required="Please Enter Name"></div>

                  <div class="form-group">
                    <label for="focusedInput">Address</label>
                    
                    <input class="form-control" type="text" placeholder="Address" name="address" required="Please Enter Address">
                  </div>

                   
                   <div class="form-group">
                  <label for="focusedInput">Mob.Number</label>
              
                   <input class="form-control" id="total" type="text" placeholder="Mob.Number" name="mob" required="Please Enter Mobile Number">
               </div>

                <div class="form-group">
               <select id="selectError" data-rel="chosen" size="4" name="gen" required="Please select Gender">
                    <option>Male</option>
                    <option>Female</option>
                </div>
            </select>
<br>
                
<div class="form-row">
<div class="form-group col-md-6">
	<button type="submit" class="btn cur-p btn-success" name="save">Save changes</button> |<button class="btn cur-p btn-danger">Cancel</button>
</div>	
         
           
          

</div>
</div>
</form>
</div>
</div>
</main>

<?php


              include "db.php";

if(isset($_POST['save']))
{

$name=$_POST['name'];
$add=$_POST['address'];
$mob=$_POST['mob'];
//$age=$_POST['age'];
$gen=$_POST['gen'];
//inserting in hotel_customer_info
$qry="INSERT INTO h_worker_info (w_name,w_add,w_mob,w_gen) VALUES ('$name','$add','$mob','$gen')";
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

?>

<?php include 'footer.php';?>