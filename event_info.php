<?php include 'header.php';?>
<?php include "db.php";?>


<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>

  <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Event Details </h4>


          	<div class="row">
          	 	<div class="col-md-4">
          		<div class="layer w-100">
      			<div class="bdT bdB">
      				<input type="text" class="form-control m-0 bdw-0 pY-15 pX-20"  id="myInput" onkeyup="myFunction()" placeholder="Search by customer names"></div>
      			</div>
      		</div>


      			<div class="col-md-4">
          		<div class="layer w-100">
      			<div class="bdT bdB">
      				<input type="text" class="form-control m-0 bdw-0 pY-15 pX-20"  id="myIn" onkeyup="myFun()" placeholder="Search by Event "></div>
      			</div>
      		</div>

      		<div class="col-md-4">
      			 <a href="add_event.php"> <button type="button" class="btn btn-info add-new"><i class="icon-plus"></i> Add New</button></a>
      		</div>	
      		</div>	
<br />
<br />
                    	
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFun() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myIn");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>



<?php

$result = mysqli_query($con,"SELECT * FROM event_info order by(c_id) desc");
           //echo "<table class='table table-bordered table-striped'>
				echo "<table class='table table-bordered' id='myTable'>
                <thead>
                <tr>
                    
                     <th>No.</th>
                     	<th>Order Date</th>
                        <th>Name</th>
                        <th>Event</th>
                        <th>Date of Event</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>People</th>
                        <th>Menu</th>
                           <th >Status</th>
                        
                        <th colspan='4'>Action</th>
                    </tr>
                </thead>";
                
                while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$dish=array();
echo "<td>" . $row['c_id'] . "</td>";
echo "<td>" . $row['o_dt'] . "</td>"; 
echo "<td>" . $row['cust_name'] . "</td>";
echo "<td>" . $row['event_name'] . "</td>";
echo "<td>" . $row['date'] . "</td>"; 
echo "<td>" . $row['cust_add'] . "</td>";
echo "<td>" . $row['cust_phone'] . "</td>";
echo "<td>" . $row['qty'] . "</td>";
$id=$row['c_id'];

$res = mysqli_query($con,"SELECT d_name FROM cat_orders where c_id='$id'");
 while($row = mysqli_fetch_array($res))
{
$dish[]=$row['d_name'];
}
echo "<td>" . implode(",",$dish). "</td>";
$pay=null;
$res1 = mysqli_query($con,"SELECT pay_status FROM cat_bill where c_id='$id'");
 while($row = mysqli_fetch_array($res1))
{
$pay=$row['pay_status'];
}
echo "<td><label style='background-color:orange; font-size:10px'>" .$pay."</label></td>";
$pay=null;
echo "<td>";

?>

<a href="menu.html"><i class="ti-menu-alt" title="Menu" data-toggle="tooltip"></i></a><br>
<?php if(mysqli_num_rows($res1)>0)
{ 
	echo "<a onclick='return alertfun();'><i class='ti-receipt' title='Make a Bill' data-toggle='tooltip'></i></a> <br>";
	
}
else
{

echo "<a href='Addcatinvoice.php?id=$id'><i class='ti-receipt' title='Make a Bill' data-toggle='tooltip'></i></a> <br>";
}

?>
<a href="Edit_event.php?id=<?php echo $id ?>"><i class=" ti-pencil-alt" title="Edit Event" data-toggle="tooltip"></i></a><br>

<?php if(mysqli_num_rows($res1)>0)
{ 
echo "<a href='cat_dues.php?id=$id'><i class='ti-back-right' title='Dues' data-toggle='tooltip'></i></a><br>";
}
else
{
echo "<a onclick='return alertfun2();'><i class='ti-back-right' title='Dues' data-toggle='tooltip'></i></a><br>";

}
?>
<?php if(mysqli_num_rows($res1)>0)
{ 
echo "<a href='catering_invoice.php?id= $id '><i class='ti-printer' title='Invoice' data-toggle='tooltip'></i></a><br>";
}
else
{
echo "<a onclick='return alertfun2();'><i class='ti-printer' title='Invoice' data-toggle='tooltip'></i></a><br>";

}
?>

<a href="w_new.php?id=<?php echo $id?>"><i class="ti-id-badge" title="Worker" data-toggle="tooltip"></i></a><br>

<a href="delete_event.php?id=<?php echo $id ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"><i class='ti-trash'>  </i></a>
<br>
</td>
<?php
echo "</tr>";
unset($dish); 
}
?>



<?php  echo "</table>";?>

<!--<a class="delete" title="Delete" data-toggle="tooltip"><i class="icon-trash"></i></a>-->
<script type="text/javascript">
    function alertfun() {
    	alert('Bill has been already created!');
    }
       function alertfun2() {
    	alert('Bill not created yet!');
    }
</script>

</div>
</div>
</main>

                
            
   	 <?php include 'footer.php';?>