<?php include 'header.php';
 include "db.php";
$ids=$_GET['id'];
?>
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
                    
                  <input class="form-control" id="paid" type="text" name="paid">
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
                 

</form>
</div>
            </div>
          </div>
        </div>
      </div>
    </main>
  <?php include 'footer.php';?>        