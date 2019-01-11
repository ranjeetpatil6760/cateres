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
            <h4 class="c-grey-900 mT-10 mB-30">Event Worker Details</h4>
             
               <div class="row">
                    <div class="col-md-6">
                      <label class="fw-500">Search by Name</label>
                    <div class="col-md-4">
              <div class="layer w-100">
            <div class="bdT bdB">
              <input type="text" class="form-control m-0 bdw-0 pY-15 pX-20"  id="myIn" onkeyup="myFun()" placeholder="Search by Name "></div>
            </div>
          </div>

                    </div>
                     
                  </div>
                  <br/>
                  
             
<script>
function myFun() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myIn");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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




		

      		<div class="col-md-10">

      			<div class="bgc-white bd bdrs-3 p-20 mB-20">
      			<div class="table-wrapper-scroll-y">

<?php
include "db.php";
$result = mysqli_query($con,"SELECT * FROM event_worker order by(c_id) desc");
           //echo "<table id=1 class='table table-bordered table-striped'>
           echo "<table class='table table-bordered' id='myTable'>
                <thead>
                    <tr>
                    <th>Date</th>
                      <th>Worker Name</th>
                        <th>Event Name</th>
                        <th>Worker</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Advance</th>
                        <th>Amount</th>
                        <th>Dues</th>
              
                    </tr>
                </thead>";
                while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['w_date'] . "</td>"; 
echo "<td>" . $row['w_name'] . "</td>"; 
echo "<td>" . $row['event'] . "</td>"; 
echo "<td>" . $row['wqty'] . "</td>";
echo "<td>" . $row['male'] . "</td>"; 
echo "<td>" . $row['female'] . "</td>";
echo "<td>" . $row['w_advance'] . "</td>";
echo "<td>" . $row['w_amount'] . "</td>";
echo "<td>" . $row['w_dues'] . "</td>";

?>
<?php
echo "</tr>";
}
?>



<?php  echo "</table>";?>
</div>

      			</div>
      			</div>
      			</div>
      			</div>
      			
      			</main>


<?php include 'footer.php';?>
	
