<?php
include("conn.php");
$name = mysqli_real_escape_string($con, isset($_POST['name']) ? $_POST['name'] : '');
$mob = mysqli_real_escape_string($con, isset($_POST['mob']) ? $_POST['mob'] : '');
$bgp = mysqli_real_escape_string($con, isset($_POST['bgp']) ? $_POST['bgp'] : '');
$email = mysqli_real_escape_string($con, isset($_POST['email']) ? $_POST['email'] : '');
$pass = mysqli_real_escape_string($con, isset($_POST['pass']) ? $_POST['pass'] : '');


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<script> alert(\"Invalid email\"); </script>";
  header("refresh:0;url=login.php");
}
else {
if ($bgp == "A+" || $bgp == "A-" || $bgp == "B+" || $bgp == "B-" || $bgp == "O+" || $bgp == "O-" ||$bgp == "AB+" ||$bgp == "AB-") {
	
/*echo "<h1> $email </h1>";*/

$cmd = "INSERT INTO signup(name,mob,pass,bgp,email) VALUES('$name', $mob,'$pass', '$bgp', '$email')";

if (!mysqli_query($con, $cmd)) {
	echo (mysqli_connect_error());
	echo "<script> alert(\"Data is not inserted pleaet contact to your database administrator...\"); </script>";
}
else {
	header("refresh:0;url=login.php");
}
}

else {
  echo "<script> alert(\"Invalid Blood Group\"); </script>";
  header("refresh:0;url=login.php");
}
}

?>