<?php

session_start();
	$con = mysqli_connect("localhost", "root", "", "exam");
	if (!$con) {
		die('Could not connect: ' . mysqli_error());
	}

	$title = mysqli_real_escape_string($con,$_GET['title']);
	$result = mysqli_query($con, "SELECT * FROM document WHERE title= '".$title."'");

	$row = mysqli_fetch_array($result);

	$doctemplates = explode(" ",$row['templates']);
	$resultstring = "";

	foreach ($doctemplates as $value) {
		$content = mysqli_query($con,"SELECT * FROM template WHERE name= '".$value."'");
		$resultcontent = mysqli_fetch_array($content);
		$resultstring = $resultcontent['content'];
		$ke = mysqli_query($con,"SELECT * FROM keyword");
		while($keyss = mysqli_fetch_array($ke))
		{	
			if(str_contains($resultcontent['content'],$keyss['keyvalue']))
			{
				$resultstring = str_replace($keyss['keyvalue'], $keyss['value'],$resultstring);
			}
		}
		echo $resultstring;
		echo "<br/>";
		echo "<br/>";
	}
	mysqli_close($con);
?> 