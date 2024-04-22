<?php
session_start();

$servername = "localhost";
$database = "userregistration";
$username = "root";
$password = "";

$costumer = $_SESSION['username'];
$artist = $_SESSION['artist'];
$color =  $_SESSION['color'];
$width = $_SESSION['width'];
$height = $_SESSION['height'];
$date = $_SESSION['date'];
$hour = $_SESSION['hour'];
$mess = $_SESSION['mess'];
$placement = $_SESSION['placement'];

$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$ordernumber = $today . $rand;
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}



 

$sql = "INSERT INTO ordertable Values ('$ordernumber', '$costumer', '$artist', '$color', '$date', '$width', '$height', '$placement', '$mess', '$hour')";
if (mysqli_query($conn, $sql)) {
      header("location: myorders.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>