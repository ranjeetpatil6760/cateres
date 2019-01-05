<?php
header('Content-Type: application/json');

include "db.php";

$sqlQuery = "SELECT c_id,date,total FROM cat_bill ORDER BY c_id";

$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}



echo json_encode($data);
?>