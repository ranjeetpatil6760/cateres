<?php include 'header.php';?>
<?php include "db.php";?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
   
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
            <?php
        $ids=$_GET['id'];

$result = mysqli_query($con,"SELECT * FROM cat_bill where c_id='$ids'");
 while($row = mysqli_fetch_array($result))
{
        ?>
          	<h4 class="c-grey-900 mT-10 mB-30">Customer Dues </h4>

<form method="post" action="">
<div class="form-row">
	


<div class="masonry-item col-md-4">
        
            
            <div class="mT-30">
            
                <div class="form-group">
                  <label for="focusedInput">Pending Amount</label>
                   <input class="form-control" id="pending" type="text" placeholder="Name" readonly="true" name="Pending" value="<?php echo $row['dues']; }?>"></div>

                  <div class="form-group">
                    <label for="focusedInput">Paid</label>
                    
                    <input class="form-control" id="paid" type="text" placeholder="Rs." name="paid">
                  </div>

                   
                   <div class="form-group">
                  <label for="focusedInput">Remaining Dues</label>
              
                   <input class="form-control" id="new_dues" type="text" placeholder="Rs." name="new_dues">
               </div>

               <div class="form-group">
                  
              <label for="selectError">Payment Status:</label>
                   <div class="controls">
                  <div id="itemRows">

                  <select id="selectError" data-rel="chosen" size="4" name="p_status">
                    <option>Full Payment</option>
                    <option>Dues</option>
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
<script type="text/javascript">
              $(document).ready(function(){

    $('#paid').change(function(){
      var t=$('#pending').val();
      var a=$('#paid').val();
      var e=t-a;
      if()
        $('#new_dues').val(e);
    });
});
              </script>
</div>
</div>
</main>

<?php


if(isset($_POST['save']))
{

$n_d=$_POST['new_dues'];
$p_s=$_POST['p_status'];

//inserting in hotel_customer_info
$qry="Update cat_bill set dues='$n_d',pay_status='$p_s' where c_id='$ids'";
if(mysqli_query($con,$qry))
{
  echo "<script> alert('Updates successfully')";
  echo " </script>";
}
else
{
  echo "<script> alert('Failed to update.Try Again!')";
  echo " </script>";
}
}
?>
          
        

<?php include 'footer.php';?>