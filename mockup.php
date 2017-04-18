<?php 
	require 'app/start.php';


	// $users = $db->prepare("SELECT * FROM users");
	// $users->bindParam(":username", $_SESSION['user']['username']);
	// $users->execute();

	// calls all from user table in the database
	if(isset($_SESSION['user'])){
		$users = $db->query("
				SELECT *
				FROM users

				LIMIT 7
			")->fetchAll(PDO::FETCH_ASSOC);
	} elseif(isset($_SESSION['employer'])) {
			$users = $db->query("
				SELECT *
				FROM users
			")->fetchAll(PDO::FETCH_ASSOC);
	} else{
		header("Location: ".BASE_URL);
		die("Redirecting to: ".BASE_URL);
	}
       
	require VIEW_ROOT . '/pages/mockup.php';
?>
