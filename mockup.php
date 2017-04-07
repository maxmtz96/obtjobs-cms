<?php 
	require 'app/start.php';


	$users = $db->prepare("SELECT * FROM users");
	$users->bindParam(":username", $_SESSION['user']['username']);
	$users->execute();
       
	require VIEW_ROOT . '/pages/mockup.php';
?>
