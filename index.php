<?php 
	require 'app/start.php';


// calls all from user table in the database 
	$users = $db->query("
			SELECT *
			FROM users
		")->fetchAll(PDO::FETCH_ASSOC);



	require VIEW_ROOT . '/home.php';
?>
