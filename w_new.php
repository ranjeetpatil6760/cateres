

<script src="js/jquery-1.9.1.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
<?php include 'header.php';?>
<?php include "db.php";?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
   <form action="" method="post">
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">Add Workers to Events </h4>

             <div class="row">
              <div class="col-md-4">
                      <label class="fw-500">Date</label>
                      <div class=" form-group col-md-8">
                        <div class="input-group">
                          <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
                          <?PHP
                      $date=date("Y-m-d");

                      echo"<input type='date' name='date' id='datepicker' value='$date' required >";?>
                        </div>
                      </div>
                    </div>

                  </div>


<div class="form-row">

<?php

$ids=$_GET['id'];

$result1 = mysqli_query($con,"SELECT * FROM event_info where c_id='$ids'");
 while($row = mysqli_fetch_array($result1))
{
  $event= $row['event_name'];

?>

                
              </div>
            </div>

            <div class="control-group">
                <label class="fw-500">Customer Name:</label>
                <div class="form-group col-md-2">
                  <input class="form-control" id="focusedInput" type="text"  name="cust_name" value="<?php echo $row['cust_name']?>" ena>
                </div>
              </div>


                <div class="control-group">
                   <label class="fw-500">Event Name:</label>
                   <div class="form-group col-md-2">
                  <input  class="form-control" id="focusedInput" type="text" name="event_name" value="<?php echo $row['event_name']?>">
                </div>
                </div>

<div class="control-group">
 
  <div id="itemRows">
<div class="form-row">

<div class="form-group col-md-2"> 

 <label for="selectError" class="fw-500">Select Worker</label>

<select id="selectError" class="form-control" data-rel="chosen" name="w_name">

  


                <?php
}

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




<div class="form-group col-md-2">
  <label class="fw-500">No. of Workers</label>

<input type="text" class="form-control" name="no_w" size="4" / >
</div>  


<div class="form-group col-md-2">
  <label class="fw-500">Male</label>

<input type="text" class="form-control" name="male" />
</div>  

<div class="form-group col-md-2">
  <label class="fw-500">Female</label>

<input type="text" class="form-control" name="female" />
</div>  

<div class="form-group col-md-2">
  <label class="fw-500">Dues</label>

<input type="text" class="form-control" name="dues" />
</div>  

<div class="form-group col-md-2">
  <label class="fw-500">Amount</label>

<input type="text" class="form-control" name="amt" />
</div>  


<div class="form-group col-md-2">
  <label class="fw-500">Add Workers</label>
<input onclick="addRow(this.form);" class="btn btn-primary form-control" type="button" value="Add Workers" />

<script type="text/javascript">
var rowNum = 0;
var sum=0;
var sum1=0;
var am=0;
var am1=0;
function addRow(frm) {
rowNum ++;
var row = '<p id="rowNum'+rowNum+'"><label class="fw-500">Worker Name:</label><input type="text"  name="wname[]" value="'+frm.w_name.value+'" readonly="true" /><label class="fw-500">No.of Workers:</label><input type="text"  name="no_w[]" value="'+frm.no_w.value+'" readonly="true" /><label class="fw-500">Male:</label><input type="text"  name="male[]" value="'+frm.male.value+'" readonly="true" /><label class="fw-500">Female:</label><input type="text"  name="female[]" value="'+frm.female.value+'" readonly="true" /><label class="fw-500">Dues:</label><input type="text"  name="dues[]" value="'+frm.dues.value+'" readonly="true" /><label class="fw-500">Amount:</label><input type="text"  name="amt[]" value="'+frm.amt.value+'" readonly="true" /><br><br><input  type="button" class="btn btn-danger" value="-Remove" onclick="removeRow('+rowNum+');"></p>';
 sum=frm.dues.value;
 sum1+=parseInt(sum);
 am=frm.amt.value;
 am1+=parseInt(am);

jQuery('#itemRows').append(row);
frm.w_name.value = '';
frm.no_w.value = '';
frm.male.value = '';
frm.female.value = '';
frm.dues.value = ''; 
frm.amt.value = '';

$('#stotal').val(sum1);
$('#samt').val(am1);
}
function removeRow(rnum) {
jQuery('#rowNum'+rnum).remove();
}

//$(document).ready(function(){
  //  $('#dcnt').change(function(){
    //  var s=$('#stotal').val();
      //var d=$('#dcnt').val();
      //var a=s-((s*d)/100);
        //$('#total').val(a);
   // });
//});

</script>
</div>  



</div>
</div>
</div>

<div class="masonry-item col-md-4">
        
            
            <div class="mT-30">
            
                <div class="form-group">
                  <label for="focusedInput">Total Dues</label>
                   <input class="form-control" id="stotal" type="text" placeholder="Rs." name="subtotal"></div>

                  <div class="form-group">
                    <label for="focusedInput">Total Amount</label>
                    
                    <input class="form-control" id="samt" type="text" placeholder="Rs." name="samount">
                  </div>

                  

                
<div class="form-row">
<div class="form-group col-md-6">
  <button type="submit" class="btn cur-p btn-success" name="save">Save changes</button> |<button class="btn cur-p btn-danger">Cancel</button>
</div>  
         
 <?php
include "db.php";
//$id1 = mysql_query("SELECT MAX(h_id) FROM hotel_customer_info");
//$id = "SELECT * FROM hotel_customer_info WHERE h_id = $id1 ";
if(isset($_POST['save']))
{

$totaldues=$_POST['subtotal'];
$totalamount=$_POST['samount'];

//inserting in hotel_customer_info
$qry="INSERT INTO cat_bill (w_totaldues,w_total) VALUES ('$totaldues','$totalamount')";
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

foreach($_POST['wname'] as $cnt => $a) {

$sql = "INSERT INTO event_worker (w_name, c_id,event, wqty,male,female,w_dues,w_amount) VALUES ('$a', '$ids','$event', '".$_POST['no_w'][$cnt]."', '".$_POST['male'][$cnt]."', '".$_POST['female'][$cnt]."','".$_POST['dues'][$cnt]."','".$_POST['amt'][$cnt]."')";
mysqli_query($con,$sql);
}


}
?>
           
          

</div>
</div>

</div>
</div>
</main>
            
<!-- <?php



//$id1 = mysql_query("SELECT MAX(h_id) FROM hotel_customer_info");

//$id = "SELECT * FROM hotel_customer_info WHERE h_id = $id1 ";



//if(isset($_POST['save']))
{

//$date=$_POST['date'];
//$name=$_POST['name'];
//$contact=$_POST['contact'];
//$address=$_POST['address'];
//$discount=$_POST['discount'];
//$total=$_POST['total'];

//inserting in hotel_customer_info
//$qry="INSERT INTO hotel_info (date, total) VALUES ('$date','$total')";
//mysqli_query($con,$qry);

}




?> -->


</form>
<?php include 'footer.php';?>
