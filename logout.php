<?php 
	require 'app/start.php';
	

	session_destroy();	// ends the sessions and redirects to index.php
    header("Location: ".BASE_URL); 
    die("Redirecting to: ".BASE_URL);
?>
