<?php 
	require 'app/start.php';

		if(empty($_SESSION['employer'] )) //checks if there a session if not redirectes to index.php
		{
			header("location: ".BASE_URL);
			die("Redirecting to ".BASE_URL);
		}
		elseif($_GET['user'] !== $_SESSION['employer']['username']){
			$username = $_GET['user'];
			// echo "username not equal";

			$employer = $db->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
			$employer->bindParam(':username', $username);
			$employer->execute(['username' => $username]);

			$employer = $employer->fetch(PDO::FETCH_ASSOC);

			require VIEW_ROOT.'/pages/empprofile.php';
		}
		else{
			$username = $_GET['user'];
			//echo "session user";
			$employer = $db->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
			$employer->bindParam(':username', $_SESSION['user']['username']);
			$employer->execute(['username' => $username]);
			$employer = $employer->fetch(PDO::FETCH_ASSOC);

			if(isset($_FILES['files'])) {
				foreach ($_FILES['files']['name'] as $file => $name) {
				$filename = $name;
				try{
					if(move_uploaded_file($_FILES['files']['tmp_name'][$file].'uploads/'.$filename)){
						$stmp = $db->prepare("UPDATE users SET image = :image WHERE id = :id");
						$stmp->bindParam(":image", $filename);
						$stmp->bindParam(":id", $_SESSION['user']['id']);
						$stmp->execute();
					}
				} catch(Exception $e){
					echo $e;
				}
			}
		}
	

		require VIEW_ROOT . '/pages/empprofile.php';
	}
?>