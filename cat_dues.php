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
          	<h4 class="c-grey-900 mT-10 mB-30">Event Dues </h4>

<form method="post" action="">
<div class="form-row">
	


<div class="masonry-item col-md-4">
        
            <div class="row">
            <div class="col-md-6">
                  <h4 class="c-grey-900 mT-10 mB-30">Customer Dues </h4>
                  <div class="form-group">
                  <label for="focusedInput">Advance Amount</label>
                   <input class="form-control" id="advance" type="text"  readonly="true" name="Advance" value="<?php echo $row['advance']; ?>"></div>
                <div class="form-group">
                  <label for="focusedInput">Pending Amount</label>
                   <input class="form-control" id="pending" type="text"  readonly="true" name="Pending" value="<?php echo $row['dues']; ?>"></div>

                  <div class="form-group">
                    <label for="focusedInput">Paid</label>
                    
                    <input class="form-control" id="paid" type="text" placeholder="Rs." name="paid" required="">
                  </div>

                   
                   <div class="form-group">
                  <label for="focusedInput">Remaining Dues</label>
              
                   <input class="form-control" id="new_dues" type="text" placeholder="Rs." name="new_dues">
               </div>
             </div>
             <div class="col-md-6">
                  <h4 class="c-grey-900 mT-10 mB-30">Worker Dues </h4>
                  <div class="form-group">
                  <label for="focusedInput">Advance Amount</label>
                   <input class="form-control" id="advance" type="text"  readonly="true" name="Advance" value="<?php echo $row['w_totaladvance']; ?>"></div>
                <div class="form-group">
                  <label for="focusedInput">Pending Amount</label>
                   <input class="form-control" id="wpending" type="text"  readonly="true" name="wPending" value="<?php echo $row['w_totaldues']; }?>"></div>

                  <div class="form-group">
                    <label for="focusedInput">Paid</label>
                    
                    <input class="form-control" id="wpaid" type="text" placeholder="Rs." name="wpaid" required="">
                  </div>

                   
                   <div class="form-group">
                  <label for="focusedInput">Remaining Dues</label>
              
                   <input class="form-control" id="wnew_dues" type="text" placeholder="Rs." name="wnew_dues">
               </div>
             </div>
</div>
               <div class="form-group">
                  
              <label for="selectError">Payment Status:</label>
                   <div class="controls">
                  <div id="itemRows">

                  <select id="selectError" data-rel="chosen" size="4" name="p_status">
                    <option>Full Payment</option>
                    <option>Dues</option>
                    </select>
                </div>
            
          
        
<br>
                
<div class="form-row">
<div class="form-group col-md-6">
	<button type="submit" class="btn cur-p btn-success" name="save">Save changes</button> |<button class="btn cur-p btn-danger">Cancel</button>
</div>	
         
           
          

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
      
        $('#new_dues').val(e);
    });
     $('#wpaid').change(function(){
      var g=$('#wpending').val();
      var s=$('#wpaid').val();
      var tt=g-s;
      
        $('#wnew_dues').val(tt);
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
$wn_d=$_POST['wnew_dues'];

//inserting in hotel_customer_info
$qry="Update cat_bill set dues='$n_d',pay_status='$p_s',w_totaldues='$wn_d' where c_id='$ids'";
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
<!--      <script type="text/javascript">
alert("review your answer");
window.location.href = "index.php";
</script>    -->  
        

<?php include 'footer.php';?>
