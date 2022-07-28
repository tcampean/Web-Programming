<?php
	session_start();
	if (!isset($_SESSION['validuser'])) {
		header('Location: login.html');
	} else {
	
		echo "<form action='add_employee.html' method='POST'>";
		echo " 	 <input type='submit' value='Add' name='add' />";
		echo "</form>";
		echo "<form action='remove_employee.html' method='POST'>";
		echo " 	 <input type='submit' value='Remove' name='remove' />";
		echo "</form>";
		
		echo "<form action='name_lookup.html' method='POST'>";
		echo " 	 <input type='submit' value='Name Lookup' name='name' />";
		echo "</form>";
		echo "<form action='update_employee.html' method='POST'>";
		echo " 	 <input type='submit' value='Update' name='update' />";
		echo "</form>";
		echo "<form action='browsing_employee.html' method='POST'>";
		echo " 	 <input type='submit' value='Browse' name='browse' />";
		echo "</form>";
	}
?>
