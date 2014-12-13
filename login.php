<?php

	require_once ("connect.php");
	session_start();

	$username = $_REQUEST["uname"];
	$password = $_REQUEST["pword"];
	
	$query = mysql_query("SELECT * FROM User");
	
	while ($row = mysql_fetch_array($query)) {
		if ($username == $row["username"] && $password == $row["password"]) {
			echo "Welcome" . " " . $row["username"];
		
			$_SESSION['id'] = $row['id'];
		}
	}
	// user to mail.php page (User homepage)
	header('location:loginPage.html');
?>
