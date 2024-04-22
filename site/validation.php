<?php
session_start();

$con =mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$Mail = $_POST['gmail'];
$Haslo =$_POST['pass'];



$s= "select * from usertable where Mail= '$Mail' && Haslo='$Haslo' ";



$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']=$Mail;
	header('location:zalogowany.php');
	
	
}else {
	header("location: error.php");
	}

?>