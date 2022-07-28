<?php

session_start();
	$con = mysqli_connect("localhost", "root", "", "laboratorydb");
	$role = mysqli_real_escape_string($con,$_GET['role']);
		if (!$con) {
		die('Could not connect: ' . mysqli_error());
	}

	
	$result = mysqli_query($con, "SELECT * FROM user WHERE Role='".$role."'");

	//echo "<html><body>";
	echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Username</th><th>Password</th><th>Age</th><th>Role</th><th>Email</th></tr>";

	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['Username'] . "</td>";
		echo "<td>" . $row['Password'] . "</td>";
		echo "<td>" . $row['Age'] . "</td>";
		echo "<td>" . $row['Role'] . "</td>";
		echo "<td>" . $row['Email'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	//echo "</body></html>";
	mysqli_close($con);
?> 