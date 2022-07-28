<?php

	session_start();
	$_SESSION['validuser'] = 1;
	$_SESSION['user'] = $_GET['user'];
	header("Location: welcome.php");
?>
