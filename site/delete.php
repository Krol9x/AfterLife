<?php
session_start();

$con =mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');
$delete = $_POST['delete'];

$reg= "Delete from ordertable where ordernumber='$delete'";
mysqli_query($con,$reg);
header('location:myorders.php');


?>