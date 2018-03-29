<?php 
	if(isset($_POST["submit"]))
	{
	echo "<h1>submitted</h1>";
	$mno = $_POST["mno"];
	$message =  $_POST["message"];
	//$message =  mysqli_real_escape_string($con,$message);
	if(preg_match( '/^[A-Z0-9]{10}$/', $mno) && !empty($message)) {
	$ch = curl_init();
	$user="deb4uon@gmail.com:44664466";
	$receipientno="9056558975"; 
	$senderID="TEST SMS"; 
	$msgtxt=$mno." ".$message; 
	curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
	$buffer = curl_exec($ch);
	if(empty ($buffer))
	{ echo " buffer is empty "; }
	else
	{ echo "Message Sent"; } 
	curl_close($ch);
	} else {
	echo 'Not Valid Information';
	}
	}
?>