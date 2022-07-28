<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>tr:nth-child(odd) {
  background-color: #D6EEEE;
}</style>
</head>
<body>



<?php

session_start();

	$con = mysqli_connect("localhost", "root", "", "exam");
	$title = mysqli_real_escape_string($con,$_GET['title']);
	
	if (!$con) {
		die('Could not connect: ' . mysqli_error());
	}

	$result = mysqli_query($con, "SELECT * FROM document");

	echo "<table border='1'><tr><th>ID</th><th>Title</th><th>List of templates</th></tr>";

	while($row = mysqli_fetch_array($result)){
		if(stristr($row['title'], $title)){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['title'] . "</td>";
		echo "<td>" . $row['templates'] . "</td>";
		echo "</tr>";
		}
		
	}
	echo "</table>";
	mysqli_close($con);
?> 
<br/>
<br/>
<br/>
<br/>
RENDER DOCUMENT:<br/>
		<form action="render.php" method="GET">
			ENTER FULL TITLE: <input type="text" name="title"/><br/>

			<input type="submit" value="Render" name="render" />
		</form>
</body>
</html>
