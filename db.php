<?php

$con=mysqli_connect("localhost","root","","salavi");
mysqli_query($con,"SET character_set_results=utf8");
mb_language('uni');
mb_internal_encoding('UTF-8');

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
