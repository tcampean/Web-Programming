<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "laboratorydb");

$name = mysqli_real_escape_string($con,$_GET['name']);
	$username = mysqli_real_escape_string($con,$_GET['user']);
	$password = mysqli_real_escape_string($con,$_GET['pass']);
	$age = mysqli_real_escape_string($con,$_GET['age']);
	$role = mysqli_real_escape_string($con,$_GET['role']);
	$email = mysqli_real_escape_string($con,$_GET['email']);


	$sql = "INSERT INTO user(Name,Username,Password,Age,Role,Email) VALUES ('".$name . "','" .$username. "','" . $password . "','" . $age . "','" . $role . "','". $email . "')";
	mysqli_query($con,$sql);

	header('Location: welcome.php');

	mysqli_close($con);

?>