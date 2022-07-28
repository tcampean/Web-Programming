<?php

session_start();
	$con = mysqli_connect("localhost", "root", "", "laboratorydb");
	$id = mysqli_real_escape_string($con,$_GET['id']);


	$sql = "DELETE FROM user WHERE ID= '".$id."'";
	mysqli_query($con,$sql);

	header('Location: welcome.php');

	mysqli_close($con);

?>