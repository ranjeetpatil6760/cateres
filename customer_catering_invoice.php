<?php include 'header.php';?>
<?php include "db.php";?>
<style type="text/css">
  #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
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
    td = tr[i].getElementsByTagName("td")[5];
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

      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
          	<h4 class="c-grey-900 mT-10 mB-30">Customer Details</h4>

          	<div class="row">
          	 	<div class="col-md-4">
          		<div class="layer w-100">
      			<div class="bdT bdB">
      				<input type="text" class="form-control m-0 bdw-0 pY-15 pX-20" id="myInput" onkeyup="myFunction()" placeholder="Search by mobile number"></div>
      			</div>
      		</div>

      		<div class="col-md-4">
      			 <!-- <a href="catering_invoice.php"> <button type="button" class="btn btn-info add-new"><i class="icon-plus"></i> Add New</button></a> -->
      		</div>	
      		</div>	
      			<br />

          	<?php

$result = mysqli_query($con,"SELECT * FROM event_info order by(c_id) desc");
           //echo "<table class='table table-bordered table-striped'>
				echo "<table class='table table-bordered' id='myTable'>
                <thead>
                <tr>
                    
                     <th>Record No.</th>
                     	<th >Date</th>
                        <th>Name</th>
                        <th>Event</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>People</th>
                        <th>Action</th>
                    </tr>
                </thead>";
                while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['c_id'] . "</td>";
echo "<td>" . $row['date'] . "</td>"; 
echo "<td>" . $row['cust_name'] . "</td>";
echo "<td>" . $row['event_name'] . "</td>"; 
echo "<td>" . $row['cust_add'] . "</td>";
echo "<td>" . $row['cust_phone'] . "</td>";
echo "<td>" . $row['qty'] . "</td>";
echo "<td>";
?><a href="delete_cater_cust.php?id=<?php echo $row['c_id'] ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"><i class='ti-trash'>  </i></a></td>
<?php
echo "</tr>";
}
?>



<?php  echo "</table>";?>



</div>
</div>
</main>


<?php include 'footer.php';?>