<?php include 'header.php';?>
<?php include "db.php";?>


<script src="js/jquery-1.9.1.min.js"></script>

	
  <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Edit Event </h4>

          	<div class="row">
          	<div class="masonry-item col-md-6">
      		<div class="mT-30">
            <?php
$ids=$_GET['id'];

$result = mysqli_query($con,"SELECT * FROM event_info where c_id='$ids'");
 while($row = mysqli_fetch_array($result))
{
?>
      				<form class="form-horizontal" action="" method="POST">
      					<div class="form-row">
      						<div class="form-group col-md-6">
      							<label for="inputEmail4">Event Name</label>
      							
      							 <input class="form-control" id="focusedInput" type="text" placeholder="Event Name" name="event_name" value="<?php echo $row['event_name']?>">
      						</div>
      						<div class="form-group col-md-6">
      							
      								<label class="fw-500">Date of Event</label>
      								<div class="timepicker-input input-icon form-group">
                        <div class="input-group">
                          
                          <input type='date' class='input-xlarge focused' name='date'  id='datepicker' value="<?php echo $row['date']?>" required >
                        </div>
                      </div>
      							
      						</div>
      					</div>


      					<div class="form-row">
      						<div class="form-group col-md-6">
      							<label for="inputEmail4">Customer Name</label>
      							
      						<input class="form-control" id="focusedInput" type="text" placeholder="Customer Name" 
      						name="name" value="<?php echo $row['cust_name']?>">
      						
      						</div>


      						<div class="form-group col-md-6">
      							<label for="inputEmail4">Customer Number</label>
      							
      						<input class="form-control" id="focusedInput" type="text" placeholder="Customer Number" name="contact" value="<?php echo $row['cust_phone']?>">
      						</div>
                    
                      <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address" value="<?php echo $row['cust_add']?>">
                </div>
      						<div class="form-group col-md-6">
      							<label for="inputEmail4">Number of People</label>
      							
      						<input class="form-control" id="focusedInput" type="text" placeholder="Number of People" name="qty" value="<?php echo $row['qty']?>">
      						</div>



      					</div>
      					
      				<div class="control-group">
                <label class="control-label" for="selectError">Menu:</label>
                <div class="controls">

    <?php   
    }     
$res = mysqli_query($con,"SELECT * FROM cat_orders where c_id='$ids'");
echo "<table border='1' cellpadding='10' cellspacing='10' width:100%>";
 while($row = mysqli_fetch_array($res))
{
  echo "<tr>";
  
  echo "<td>".$row['d_name']."</td>";
  echo "<td><a href='delmenu.php?id=";
  echo $row['id']."&c=".$ids;
  echo "' onclick='return confirm('Are you sure?')'>Delete</a></td>";
  echo "</tr>";

}
echo "</table>";
?>                
</div></div>

      					<div class="form-row">
						<div id="itemRows">
						<div class="form-group col-md-10">
								<label  for="selectError">Add Items</label>


				
								  <select id="selectError" class="form-control" data-rel="chosen"  name="item_name">
								  	
								
<?php
                  $q1= "SELECT * FROM dish_list";
$result = mysqli_query($con,$q1);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  ?>
  <option><?php echo $row['dish_name']?></option>
<?php
}
?>
	
</select>
					
</div>
								


 <input type="hidden" name="add_total" /> 
 <input onclick="addRow(this.form);" type="button" class="btn btn-primary" value="+Add Item" name="Butn"/>


<br />
<br />



<span><h3>Order details:</h3></span><hr</div>


<script type="text/javascript">
  document.cookie = "flag =0";
   
var rowNum = 0;
var sum=0;
var rt=0;
function addRow(frm) {
rowNum ++;
var row = '<p id="rowNum'+rowNum+'"><input type="select" name="dname[]" size="4" value="'+frm.item_name.value+'" readonly="true"> <input type="button" class="btn btn-danger" value="-Remove" onclick="removeRow('+rowNum+');"><br></p>';

jQuery('#itemRows').append(row);
frm.item_name.value = '';
 
}
function removeRow(rnum,rt) {
jQuery('#rowNum'+rnum).remove();

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
});

</script>
</div></div>
                                




							 
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
$event_name=$_POST['event_name'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$qty=$_POST['qty'];
//inserting in hotel_customer_info
$qry="Update event_info set event_name='$event_name', date='$date', cust_name='$name', cust_add='$address', cust_phone='$contact',qty='$qty' where c_id='$ids'";
if(mysqli_query($con,$qry))
{
  echo "<script> alert('Edited successfully')";
  echo " </script>";
echo "<script>location.href = 'Event_info.php'</script>";


foreach($_POST['dname'] as $cnt => $a) {
$sql = "INSERT INTO cat_orders (d_name, c_id) VALUES ('$a', '$ids');";
mysqli_query($con,$sql);

}
  
}
else
  {
  echo "<script> alert('Failed to store...Try Again!')";
  echo " </script>";


}
/*
//inserting in cat_dishes
$id= "SELECT * FROM event_info WHERE c_id = (SELECT MAX(c_id) FROM event_info)";
$result = mysqli_query($con,$id);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  $last_id = $row['c_id'];
}
foreach($_POST['dname'] as $cnt => $a) {
$sql = "INSERT INTO cat_orders (d_name, c_id) VALUES ('$a', '$last_id');";
mysqli_query($con,$sql);
}
*/
  }
?>
<script type="text/javascript">
	$sum=0;
</script>
					
</form>
</div>
</div>
</div>
</div>
</div>
</main>



		
	   	 <?php include 'footer.php';?>