<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "laboratorydb");

	$id = mysqli_real_escape_string($con,$_GET['id']);

	$name =mysqli_real_escape_string($con, $_GET['name']);
	$role =mysqli_real_escape_string($con, $_GET['role']);

	if(!empty($name) && !empty($role)){
		$sql = "UPDATE user SET Name ='".$name . "', Role='" .$role. "' WHERE ID='".$id."'";
	
	mysqli_query($con,$sql);
}elseif (empty($name) && !empty($role)) {
	$sql = "UPDATE user SET Role='" .$role. "' WHERE ID='".$id."'";
	mysqli_query($con,$sql);
}elseif(!empty($name) && empty($role))
{
	$sql = "UPDATE user SET Name ='".$name ."' WHERE ID='".$id."'";
	
	mysqli_query($con,$sql);
}

	header('Location: welcome.php');

	mysqli_close($con);

?>