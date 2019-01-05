<?php
include 'db.php';
$ids=$_GET['id'];
mysqli_query($con,"delete from event_info where c_id='$ids'");
header("Location: customer_catering_invoice.php");
?>