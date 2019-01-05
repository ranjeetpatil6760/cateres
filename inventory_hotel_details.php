<?php include 'header.php';?>
<?php include "db.php";?>
<meta charset="utf-8">
<script src="js/jquery-1.9.1.min.js"></script>
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
          	<h4 class="c-grey-900 mT-10 mB-30">Hotel Inventory Data</h4>


                      
                    <div class="row">
      							   <div class="col-md-6">
                      <label class="fw-500">Search by date</label>
                      <div class="timepicker-input input-icon form-group">
                        <div class="input-group">
                        <div class="input-group-addon bgc-white bd bdwR-0"> 
                          <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search by date" >
                        </div>
                        <a href="add_inventory_hotel.php"> <button type="button"  name='add' class="btn btn-info add-new"><i class="icon-plus"></i> Add New</button></a>
                      </div>
                    </div>

                    </div>
                    
      							</div>

      							</div>
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
    td = tr[i].getElementsByTagName("td")[0];
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
    
      						</div>


		<div class="row">
      		<div class="col-md-12">
      			<div class="bgc-white bd bdrs-3 p-20 mB-20">
      				     				

      				<?php
					echo "<table class='table table-bordered' id='myTable'>
      					<thead>
      						<tr>
      							<th scope='col'>Date</th>
      							<th scope='col'>Status</th>
      						</tr>
      					</thead>";
      			
       $query = "SELECT * FROM hotel_info WHERE 1 ";

       // Date filter
       if(isset($_POST['but_search'])){
          $fromDate = $_POST['fromDate'];
          $endDate = $_POST['endDate'];

          if(!empty($fromDate) && !empty($endDate)){
             $query .= " and date 
                          between '".$fromDate."' and '".$endDate."' ";
          }
        }

        // Sort
        $query .= " ORDER BY date DESC";
        $Records = mysqli_query($con,$query);

        // Check records found or not
        if(mysqli_num_rows($Records) > 0){
          while($Record = mysqli_fetch_assoc($Records)){
            $tid=$Record['t_id'];
            $date= $Record['date'];
            $stotal = $Record['subtotal'];
            $paid = $Record['paid'];
            $total = $Record['total'];
            $st=$Record['status'];
           // $price = $Record['price'];

            echo "<tr>";
            echo "<td><a href='stock_details.php?id=$tid'>". $date ."</a></td>";
  echo "<td>". $st ."</td>";          
            echo "</tr>";
          }
        }else{
          echo "<tr>";
          echo "<td colspan='4'>No record found.</td>";
          echo "</tr>";
        }
        ?>

</table>


	</div>
	</div>
	</div>
	</div>
	</div>
	</main>

				
     

	
	 <?php include 'footer.php';?>
	
	