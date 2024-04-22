<?php
session_start();
header("location: login.php");

$con =mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');
$Imie = $_POST['name'];
$Nazwisko = $_POST['surname'];
$Mail = $_POST['gmail'];
$tel = $_POST['phone'];
$Haslo = $_POST['pass'];



$s= "select * from usertable where Mail= '$Mail'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
	header("location: error.php");
}else {
	$reg= "insert into usertable(Imie,Nazwisko,Mail,tel,Haslo) values('$Imie','$Nazwisko','$Mail','$tel','$Haslo')";
	mysqli_query($con,$reg);
	echo"Poprawnie zalogowany";
}
?>