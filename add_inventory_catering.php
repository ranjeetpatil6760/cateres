<?php include 'header.php';?>
<?php include "db.php";?>
<meta charset="utf-8">
<script src="js/jquery-1.9.1.min.js"></script>

<form action="" method="POST">
 <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">Add Catering Inventory item to list</h4>


             <div class="row">
            
                      <div class="timepicker-input input-icon form-group">
                        <div class="input-group">
                          <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
                  
                                <input type='date' class='input-xlarge focused' name='date'  id='datepicker' required >
                          
                        </div>
                      </div>
                    </div>
                  </div>

<div id="itemRows">
<div class="form-row">

<div class="form-group col-md-2"> 

<select data-rel="chosen" class="form-control" size="1" name="i_name">

<?php

$q1= "SELECT * FROM item_list";
$result = mysqli_query($con,$q1) or die (mysql_error());
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  ?>
  <option><?php echo $row['items']?></option>
<?php
}
?>
</select>
</div>


<div class="form-group col-md-2">
<input type="text" class="form-control" id="quantity" placeholder="Quantity"> 
</div>

<div class="form-group col-md-2">
        <select id="unit" class="form-control" data-rel="chosen" name="Unit">
  <option>kg</option>
  <option>gm</option>
  <option>mg</option>
  <option>ltr</option>
  <option>nag</option>
  <option>dozen</option>
</select>

</div>

<div class="form-group col-md-2">
<input type="text" class="form-control" id="price" placeholder="Price">
</div>


<div class="form-group col-md-2">
<input type="button" class="add-row btn cur-p btn-primary" value="Add Row" onclick="addRow(this.form)">
</div>
<script type="text/javascript">
  
var rowNum = 0;
var sum=0;

function addRow(frm) {
rowNum ++;
var row = '<p id="rowNum'+rowNum+'"> Item: <input type="text" name="dn[]" size="4" value="'+frm.i_name.value+'" readonly="true">Quantity: <input type="text" name="dqty[]" size="4" value="'+frm.quantity.value+'" readonly="true">Unit: <input type="text" name="unit[]" value="'+frm.unit.value+'" readonly="true">Price: <input type="text" name="price[]" value="'+frm.price.value+'" readonly="true"><input type="button" class="btn btn-danger" value="-Remove" onclick="removeRow('+rowNum+','+frm.price.value+')"><br></p>';

 sum+= parseInt(frm.price.value);
jQuery('#itemRows').append(row);
frm.i_name.value = '';
frm.unit.value='';
frm.quantity.value = '';
frm.price.value = '';

$('#stotal').val(sum);
}
function removeRow(rnum,rt) {
jQuery('#rowNum'+rnum).remove();
sum-=rt;
$('#stotal').val(sum);
}

$(document).ready(function(){
    $('#paid').change(function(){
      var s=$('#stotal').val();
      var d=$('#paid').val();
      var a=s-d;
        $('#total').val(a);
    });
});
</script>

</div>

<!--
 <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Select</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Price</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
               
            </tr>
        </tbody>
    </table>
  -->   
</div>
</div>
<br />
     
<div class="form-row">

     <div class="form-group col-md-2">
<input type="text" class="form-control" name="stotal" id="stotal" placeholder="Subtotal" >
</div>

<div class="form-group col-md-2">
<input id="paid" class="form-control" type="text" placeholder="Paid" name="paid" >
</div>


<div class="form-group col-md-2">

<input type="text" class="form-control" id="total" placeholder="Total Remaining" name="total">  
</div>

</div>

<div class="form-row">
<div class="form-group col-md-5">
  <button type="submit" class="btn cur-p btn-success" name="save">Save changes</button> |

  <button class="btn cur-p btn-danger">Cancel</button>
</div>



</form>


<?php 
include "db.php";
//$id1 = mysql_query("SELECT MAX(h_id) FROM hotel_customer_info");
//$id = "SELECT * FROM hotel_customer_info WHERE h_id = $id1 ";
if(isset($_POST['save']))
{
$date=$_POST['date'];
$stotal=$_POST['stotal'];
$paid=$_POST['paid'];
$total=$_POST['total'];


$qry="INSERT INTO hotel_info (date, subtotal, paid, total) VALUES ('$date','$stotal','$paid','$total')";
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

$id= "SELECT * FROM hotel_info WHERE t_id = (SELECT MAX(t_id) FROM hotel_info)";
$result = mysqli_query($con,$id);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  $last_id = $row['t_id'];
  
}
foreach($_POST['dqty'] as $cnt => $a) {
$sql = "INSERT INTO inventory_stock_cater (t_id,date, item, qty, unit, price) VALUES ('$last_id','$date',N'".$_POST['dn'][$cnt]."','$a', '".$_POST['unit'][$cnt]."', '".$_POST['price'][$cnt]."');";
mysqli_query($con,$sql);

}

}
?>
</div>  
</div>
</div>
</main>

 <?php include 'footer.php';?>
