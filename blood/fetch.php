<?php
include("conn.php");

$name = mysqli_real_escape_string($con, isset($_POST['name']) ? $_POST['name'] : '');
$password = mysqli_real_escape_string($con, isset($_POST['pass']) ? $_POST['pass'] : '');

$cmd = "SELECT * from signup WHERE name = '$name' and pass = '$password'";
$q = mysqli_query($con, $cmd);
$info = mysqli_fetch_array($q);
// print_r($info);  // Hogaya.....hahahaha
//echo "ID is: ".$info['id'];

if(($info['name'] == "$name") && ($info['pass'] == "$password"))
	header("refresh:0;url = index.php?id=".$info['id']);

else
	echo "<h1>Nai hua login </h1>";


?>