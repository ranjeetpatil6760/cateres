<?php include 'header.php';
 include "db.php";
$ids=$_GET['id'];
?>
<script src="js/jquery-1.9.1.min.js"></script>
<main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container">
            <h4 class="c-grey-900 mT-10 mB-30">Stock Details</h4>

<div class="row">
            <div class="masonry-item col-md-6">
          <div class="mT-30">
              <form class="form-horizontal" action="" method="POST">
                <div class="form-row"><?php
                      $res = mysqli_query($con,"SELECT * FROM hotel_info where t_id='$ids'");
                      while($row = mysqli_fetch_array($res))
{



$st = $row['subtotal'];
$pd = $row['paid'];
$d = $row['total'];
$da = $row['date'];



              ?>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Date of purchase</label>
                    
               <input class="form-control" id="focusedInput" type="text" placeholder="Date" name="purchased_date" value="<?php echo $row['date'];?>">
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Last Updated</label>
                    
               <input class="form-control" id="focusedInput" type="text" placeholder="Date" value="<?php echo $row['up_dt']; ?>" name="purchased_date">
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label class="fw-500">Date of Updatation</label>
                      <div class="timepicker-input input-icon form-group">
                        <div class="input-group">
                          <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
                         <input type="date" name='dt' value='<?php if(isset($_POST['dt'])) echo $_POST['dt'];?>'>
                        </div>
                      </div>
                    </div>
                       </div> 
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Total</label>
                    
                  <input class="form-control" id="focusedInput" type="text" 
                  name="total" value="<?php echo $st; ?>">
                  
                  </div>


                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Paid</label>
                    
                  <input class="form-control" id="focusedInput" type="text" name="pay" value="<?php echo $pd; ?>">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Pending Amount</label>
                    
                  <input class="form-control" id="dues" type="text" name="dues" value="<?php echo $d ;}?>">
                  </div>
                      

                       <div class="form-group col-md-6">
                    <label for="inputEmail4">Amount Paid</label>
                    
                  <input class="form-control" id="apaid" type="text" name="paid">
                  </div>

              

                 <div class="form-group col-md-6">
                    <label for="inputEmail4">Pending</label>
                    
                  <input class="form-control" id="new_dues" type="text" name="new_dues">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Status</label>
        <select id="status" class="form-control" data-rel="chosen" name="status">

  <option>Dues</option>
  <option>Full Payment</option>
  
</select>

</div>
<br>
                
<div class="form-row">
<div class="form-group col-md-6">
  <button type="submit" class="btn cur-p btn-success" name="save">Save changes</button> |<button class="btn cur-p btn-danger">Cancel</button>
</div>  
</form>
<script type="text/javascript">
              $(document).ready(function(){

    $('#apaid').change(function(){
      var t=$('#dues').val();
      var a=$('#apaid').val();
      var e=t-a;
      
        $('#new_dues').val(e);
    });
    });
              </script>
                       <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
              <h4 class="c-grey-900 mB-20">Stock Purchased</h4>

              <table class="table table-bordered">
                <thead>
                  <tr>
                  
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
               <?php   $result = mysqli_query($con,"SELECT * FROM inventory_stock_hotel where t_id='$ids'");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['item'] . "</td>"; 
echo "<td>" . $row['qty'] ." ". $row['unit'] . "</td>";
echo "<td>" . $row['price'] . "</td></tr>"; 
}

?>
                  
                </tbody>
              </table>
            </div>
          </div>
                 


</div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php


if(isset($_POST['save']))
{

$n_d=$_POST['new_dues'];
$p_s=$_POST['status'];
$date=$_POST['dt'];

//inserting in hotel_customer_info
$qry="Update hotel_info set total ='$n_d',up_dt='$date',status='$p_s' where t_id='$ids'";
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