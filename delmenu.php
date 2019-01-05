<?php
include 'db.php';
$ids=$_GET['id'];
$c=$_GET['c'];

mysqli_query($con,"delete from cat_orders where id='$ids'");
header("Location: Edit_event.php?id=$c");
?>