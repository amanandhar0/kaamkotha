<?php 
	session_start();
	echo $_SESSION['email'] ." Email";
	echo "<br>";
	echo $_SESSION['actype']. " Ac type";
	echo "<br>";
	echo $_SESSION['id'] . " Id";

	// echo $_COOKIE['email'];
	// echo $_COOKIE['actype'];
 ?>