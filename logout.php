<?php 
	require 'app/start.php';
	

unset($_SESSION['user']);	// ends the sessions and redirects to index.php
    header("Location: index.php"); 
    die("Redirecting to: index.php");


	require VIEW_ROOT . '/pages/logout.php';
?>
