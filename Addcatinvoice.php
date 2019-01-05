<?php include 'header.php';?>
<?php include "db.php";?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
   
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Make Catering Bill </h4>
                  <div class="row">
            <div class="masonry-item col-md-6">
          <div class="mT-30">
            <form class="form-horizontal" action="" method="POST">
              
                 <div class="form-row">
                  <div class="form-group col-md-6">
                <label class="fw-500" for="focusedInput">Date:</label>
              
              
                 <!-- <input class="input-xlarge focused" id="focusedInput" type="date" placeholder="" name="date"> -->

<?PHP

$date=date("Y-m-d");

echo"<input type='text' class='form-control' name='date'  id='datepicker' 
value='$date' required >";

$ids=$_GET['id'];

$result = mysqli_query($con,"SELECT * FROM event_info where c_id='$ids'");
 while($row = mysqli_fetch_array($result))
{
?>

                
              </div>
            </div>

                <div class="control-group">
                <label class="fw-500">Event Name:</label>
                <div class="form-group col-md-6">
                  <input class="form-control" id="focusedInput" type="text"  name="event_name" value="<?php echo $row['event_name']?>" ena>
                </div>
              </div>


                <div class="control-group">
                   <label class="fw-500">Customer Name:</label>
                   <div class="form-group col-md-6">
                  <input  class="form-control" id="focusedInput" type="text" name="name" value="<?php echo $row['cust_name']?>">
                </div>
                </div>
                 <div class="control-group">
                <label class="fw-500">Contact:</label>
                 <div class="form-group col-md-6">
                  <input class="form-control" id="focusedInput" type="text" name="contact" value="<?php echo $row['cust_phone']?>">
                </div>

                </div>
                 <div class="control-group">
                <label class="fw-500"> Address:</label>
                  <div class="form-group col-md-6">
                  <input  class="form-control" id="focusedInput" type="text" name="address" value="<?php echo $row['cust_add'] ?>">
                </div>
                </div>

                 <div class="control-group">
              <label class="fw-500">Number of People:</label>
                <div class="form-group col-md-6">
                  <input class="form-control" id="focusedInput" type="text" name="address" value="<?php echo $row['qty'] ?>">
                </div>
                </div>
                
                    
               
               <div class="form-row">
                  <div id="itemRows">
                    <div class="control-group">
                    <div class="form-group col-md-8">
              <label  for="selectError"> Add Items</label>
        
                  <select id="selectError" class="form-control" data-rel="chosen"  name="item_name">
                    
                
<?php
}
                  $q1= "SELECT * FROM cat_orders where c_id='$ids'";
$result = mysqli_query($con,$q1);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  ?>
  <option><?php echo $row['d_name']?></option>
<?php
}
?>
  
</select>
      </div>
 <div class="control-group">     
   <label class="fw-500">Quantity:</label> 
   <div class="form-group col-md-6">
    <input class="form-control" id="focusedInput" type="text" name="add_qty">   
     </div>
       </div>    
   <div class="control-group">     
   <label class="fw-500">Price:</label> 
   <div class="form-group col-md-6">
    <input class="form-control" id="focusedInput" type="text" name="add_price">   

       </div>
                </div>         

 



 <input type="hidden" name="add_total" /> <br><input onclick="addRow(this.form);" type="button" class="btn btn-primary" value="+Add Item" name="Butn"/>
 
 <br />
<br />

<span><h3>Order details:</h3></span><hr></div>
</div>

<div class="form-row">
<script type="text/javascript">
  document.cookie = "flag =0";
   
var rowNum = 0;
var sum=0;
var rt=0;
function addRow(frm) {
rowNum ++;
var row = '<p id="rowNum'+rowNum+'"> Item: <input type="select" name="dname[]"  value="'+frm.item_name.value+'" readonly="true">Quantity: <input type="text" name="dqty[]"  value="'+frm.add_qty.value+'" readonly="true">Price: <input type="text" name="price[]" value="'+frm.add_price.value+'" readonly="true">Amount: <input type="text" name="Tprice[]" value="'+frm.add_price.value*frm.add_qty.value+'" readonly="true"> <input type="button" class="btn btn-danger" value="-Remove" onclick="removeRow('+rowNum+','+frm.add_price.value*frm.add_qty.value+');"></p>';
 sum+=frm.add_price.value*frm.add_qty.value;
jQuery('#itemRows').append(row);
frm.item_name.value = '';
frm.add_qty.value = '';
frm.add_price.value = '';
frm.add_total.value = '';
$('#stotal').val(sum);
 
}
function removeRow(rnum,rt) {
jQuery('#rowNum'+rnum).remove();
var curnt_val=$('#stotal').val();
curnt_val=curnt_val-rt;
$('#stotal').val(curnt_val);
sum=curnt_val;
curnt_val=0;

}
var orowNum = 0;
var ort=0;
function addoRow(frm) {
orowNum ++;
var orow = '<p id="orowNum'+orowNum+'">Item: <input type="text" name="oname[]" size="4" value="'+frm.add_oitem.value+'" readonly="true">Quantity: <input type="text" name="oqty[]" size="4" value="'+frm.add_oqty.value+'" readonly="true"> Price: <input type="text" name="oprice[]" value="'+frm.add_oprice.value+'" readonly="true">Amount: <input type="text" name="oTprice[]" value="'+frm.add_oprice.value*frm.add_oqty.value+'" readonly="true"> <input type="button" class="btn btn-danger" value="-Remove" onclick="removeORow('+orowNum+','+frm.add_oprice.value*frm.add_oqty.value+');"><br></p>';
 sum+=frm.add_oprice.value*frm.add_oqty.value;
jQuery('#itemoRows').append(orow);
frm.add_oitem.value = '';
frm.add_oqty.value = '';
frm.add_oprice.value = '';
frm.add_ototal.value = '';
$('#stotal').val(sum);
 document.cookie = "flag =123";
}
function removeORow(rnum,ort) {
jQuery('#orowNum'+rnum).remove();
var ocurnt_val=$('#stotal').val();
ocurnt_val=ocurnt_val-ort;
}


$(document).ready(function(){
    $('#dcnt').change(function(){
      var s=$('#stotal').val();
      var d=$('#dcnt').val();
      var a=s-((s*d)/100);
        $('#total').val(a);
    });
    $('#adv').change(function(){
      var t=$('#total').val();
      var a=$('#adv').val();
      var e=t-a;
        $('#dues').val(e);
    });
});

</script>

<?php 
   $phpVar =  $_COOKIE['flag'];
   
   ?>


      
                </div>
              </div>
                                <div class="control-group">
                <label class="control-label" for="selectError">Outsourced Items:</label>
                <div class="controls">
                  <div id="itemoRows">
              Item: <input type="text" name="add_oitem" size="4" />
              Quantity: <input type="text" name="add_oqty" size="4" />
Price: <input type="text" name="add_oprice" /><br>
<input type="hidden" name="add_ototal" /> <input onclick="addoRow(this.form);" type="button" class="btn btn-primary" value="+Add Item" name="oButn" /><br>
<span><h3>Order details:</h3></span><hr></div>
<script type="text/javascript">
</script>

                </div>
              </div>



                 <div class="control-group">
                <label class="control-label" for="focusedInput">Subtotal:</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="stotal" type="text" placeholder="Rs." name="subtotal">
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Discount:</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="dcnt" type="text" placeholder="%" name="discount">
                </div>
                </div>
                   <div class="control-group">
                <label class="control-label" for="focusedInput">Total:</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="total" type="text" placeholder="Rs." name="total">
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Advance:</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="adv" type="text" placeholder="Rs." name="advance">
                </div>
                </div>
                   <div class="control-group">
                <label class="control-label" for="focusedInput">Dues:</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="dues" type="text" placeholder="Rs." name="dues">
                </div>
                </div>

                   <div class="control-group">
                <label class="control-label" for="focusedInput">Payment Status:</label>
                <div class="controls">
                  
                <select data-rel="chosen" size="4" name="pay_status">
                  <option>Full Payment</option>
                  <option>Advance Payment</option>
                  <option>No Payment</option>
                  </select>
              

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
//$id1 = mysql_query("SELECT MAX(h_id) FROM hotel_customer_info");
//$id = "SELECT * FROM hotel_customer_info WHERE h_id = $id1 ";
if(isset($_POST['save']))
{
$date=$_POST['date'];
$adv=$_POST['advance'];
$dues=$_POST['dues'];
$discount=$_POST['discount'];
$total=$_POST['total'];
$p_status=$_POST['pay_status'];
//inserting in hotel_customer_info
$qry="INSERT INTO cat_bill (date, c_id, discount, total,advance,dues,pay_status) VALUES ('$date','$ids','$discount','$total','$adv','$dues','$p_status')";
if(mysqli_query($con,$qry))
{
  echo "<script> alert('Stored successfully')";
  echo " </script>";
}
else
  {
  echo "<script> alert('Failed to store...Try Again!')";
  echo " </script>";
}
//inserting in cat_dishes
/*
$id= "SELECT * FROM cater_customer_info WHERE c_id = (SELECT MAX(c_id) FROM cater_customer_info)";
$result = mysqli_query($con,$id);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  $last_id = $row['c_id'];
}*/
foreach($_POST['dname'] as $cnt => $a) {
$sql = "INSERT INTO cat_dishes (d_name, c_id, d_qty, d_price, total) VALUES ('$a', '$ids', '".$_POST['dqty'][$cnt]."', '".$_POST['price'][$cnt]."', '".$_POST['Tprice'][$cnt]."');";
mysqli_query($con,$sql);
}
if($phpVar=="123")
{
foreach($_POST['oname'] as $ocnt => $oa) {
$osql = "INSERT INTO cat_dishes (outsource,d_name, c_id, d_qty, d_price, total) VALUES ('Yes','$oa', '$ids', '".$_POST['oqty'][$ocnt]."', '".$_POST['oprice'][$ocnt]."', '".$_POST['oTprice'][$ocnt]."');";
mysqli_query($con,$osql);
}
unset($_COOKIE['flag']);
$phpVar=0;
}
}
?>
<script type="text/javascript">
  $sum=0;
</script>
          
          </div>

         
     </div>      
  </div>        

</div>
</div>

</div>
</div>
</main>





<?php include 'footer.php';?>