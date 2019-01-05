<?php include 'header.php';?>
<?php include "db.php";?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
   
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Make a hotel Bill </h4>

          	 <div class="row">
          	 	<div class="col-md-4">
      								<label class="fw-500">Date</label>
      								<div class="timepicker-input input-icon form-group">
      									<div class="input-group">
      										<div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
      										<?PHP
											$date=date("Y-m-d");

											echo"<input type='date' class='form-control bdc-grey-200 start-date' name='date' id='datepicker' value='$date' required >";?>
      									</div>
      								</div>
      							</div>

      						</div>

<form  action="" method="POST">

<div>
<div class="form-row">
 <div class="form-group col-md-2">  
<label for="selectError" class="fw-500">Customer Name</label>


<div id="itemRows2">
<select id="selectError2" class="form-control" data-rel="chosen" name="cust_name">

  
<?php

$q1= "SELECT * FROM event_info";
$result = mysqli_query($con,$q1);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  ?>
  <option><?php echo $row['cust_name']?></option>
<?php
}
?>
</select>

</div> 

</div>
</div>

<div>
<div class="form-row">
 <div class="form-group col-md-2">  
<label for="selectError" class="fw-500">Event Name</label>


<div id="itemRows1">
<select id="selectError1" class="form-control" data-rel="chosen" name="event_name">

  
<?php

$q1= "SELECT * FROM event_info";
$result = mysqli_query($con,$q1);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  ?>
  <option><?php echo $row['event_name']?></option>
<?php
}
?>
</select>

</div> 

</div>
</div>

<div class="form-row">
	<div class="form-group col-md-2">	
<label for="selectError" class="fw-500">Worker Name</label>


<div id="itemRows">
<select id="selectError" class="form-control" data-rel="chosen" name="w_name">

	
<?php

$q1= "SELECT * FROM h_worker_info";
$result = mysqli_query($con,$q1);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	?>
	<option><?php echo $row['w_name']?></option>
<?php
}
?>
</select>

</div>
</div>




<div class="form-group col-md-2">
 	<label class="fw-500">No.of Worker</label>

<input type="text" class="form-control" name="no_w" size="4" />
</div>	


<div class="form-group col-md-2">
 	<label class="fw-500">Male</label>

<input type="text" class="form-control" name="male" />
</div>	

<div class="form-group col-md-2">
  <label class="fw-500">Female</label>

<input type="text" class="form-control" name="female" size="4" />
</div>

<div class="form-group col-md-2">
  <label class="fw-500">Amount</label>

<input type="text" class="form-control" name="amt" size="4" />
</div>

<div class="form-group col-md-2">
  <label class="fw-500">Dues</label>

<input type="text" class="form-control" name="dues" size="4" />
</div>


<div class="form-group col-md-2">
	<label class="fw-500">Add Items</label>
<input onclick="addRow(this.form);" class="btn btn-primary form-control" type="button" value="Add Items" />
</div>	

</div>
</div>
</div>
<script src="js/jquery-1.9.1.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
<script type="text/javascript">
var rowNum = 0;
var sum=0;
function addRow(frm) {
rowNum ++;
var row = '<div><p id="rowNum'+rowNum+'"><label class="fw-500">Items:</label><input type="text" class="form-control" name="dname[]" size="10" value="'+frm.w_name.value+'" readonly="true" /><label class="fw-500">Quantity:</label><input type="text" class="form-control" name="dqty[]" value="'+frm.no_w.value+'" readonly="true" /><label class="fw-500">Price:</label><input type="text" class="form-control" name="price[]" value="'+frm.male.value+'" readonly="true" /><label class="fw-500">Amount:</label><input type="text" class="form-control" name="Tprice[]" value="'+frm.female.value+'" readonly="true" /><br><br><input  type="button" class="btn btn-danger" value="-Remove" onclick="removeRow('+rowNum+');"></p></div>';
 sum+=frm.add_price.value*frm.add_qty.value;

jQuery('#itemRows').append(row);
frm.item_name.value = '';
frm.add_qty.value = ''; 
frm.add_price.value = '';
frm.add_total.value = '';
$('#stotal').val(sum);
}
function removeRow(rnum) {
jQuery('#rowNum'+rnum).remove();
}

$(document).ready(function(){
    $('#dcnt').change(function(){
    	var s=$('#stotal').val();
    	var d=$('#dcnt').val();
    	var a=s-((s*d)/100);
        $('#total').val(a);
    });
});

</script>


<div class="masonry-item col-md-4">
        
            
            <div class="mT-30">
            
                <div class="form-group">
                  <label for="focusedInput">Subtotal</label>
                   <input class="form-control" id="stotal" type="text" placeholder="Rs." name="subtotal"></div>

                  <div class="form-group">
                    <label for="focusedInput">Discount</label>
                    
                    <input class="form-control" id="dcnt" type="text" placeholder="%" name="discount">
                  </div>

                   
                   <div class="form-group">
                  <label for="focusedInput">Total</label>
              
                   <input class="form-control" id="total" type="text" placeholder="Rs." name="total">
               </div>

                
<div class="form-row">
<div class="form-group col-md-6">
	<button type="submit" class="btn cur-p btn-success" name="save">Save changes</button> |<button class="btn cur-p btn-danger">Cancel</button>

</div>
</form>	
         
           
          

</div>
</div>

</div>
</div>
</main>

<?php



//$id1 = mysql_query("SELECT MAX(h_id) FROM hotel_customer_info");

//$id = "SELECT * FROM hotel_customer_info WHERE h_id = $id1 ";



if(isset($_POST['save']))
{

$date=$_POST['date'];
//$name=$_POST['name'];
//$contact=$_POST['contact'];
//$address=$_POST['address'];
//$discount=$_POST['discount'];
$total=$_POST['total'];

//inserting in hotel_customer_info
$qry="INSERT INTO hotel_info (date, total) VALUES ('$date','$total')";
mysqli_query($con,$qry);

}




?>



<?php include 'footer.php';?>