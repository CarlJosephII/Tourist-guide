<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['ID']);
	unset($_SESSION['Nome']);
	
	header("location: index.php");
?>