<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "exam");

$key_value = mysqli_real_escape_string($con,$_GET['key_value']);
	$value = mysqli_real_escape_string($con,$_GET['value']);


	$sql = "INSERT INTO keyword(keyvalue,value) VALUES ('".$key_value . "','" .$value. "')";
	mysqli_query($con,$sql);

	header('Location: homepage.php');

	mysqli_close($con);

?>