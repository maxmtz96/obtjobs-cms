<?php 
	require 'app/start.php';


// calls all from user table in the database 
	// $users = $db->query("
	// 		 SELECT *
	// 		 FROM users

	// 		 ORDER BY RAND()
	// 		 LIMIT 2
	// 	")->fetchAll(PDO::FETCH_ASSOC);

	$users = $db->prepare("SELECT * FROM users ORDER BY RAND() LIMIT 3");
	$users->execute();

	require VIEW_ROOT . '/home.php';
?>
