<?php 
	require 'app/start.php';

		if(empty($_SESSION['user'] )) //checks if there a session if not redirectes to index.php
		{
			header("location: ".BASE_URL);
			die("Redirecting to ".BASE_URL);
		}
		elseif($_GET['user'] !== $_SESSION['user']['username']){
			$username = $_GET['user'];
			// echo "username not equal";

			$users = $db->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
			$users->bindParam(':username', $username);
			$users->execute(['username' => $username]);

			$users = $users->fetch(PDO::FETCH_ASSOC);

			require VIEW_ROOT.'/pages/profile.php';
		}
		else{
			$username = $_GET['user'];
			//echo "session user";
			$users = $db->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
			$users->bindParam(':username', $_SESSION['user']['username']);
			$users->execute(['username' => $username]);
			$users = $users->fetch(PDO::FETCH_ASSOC);

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
	

		require VIEW_ROOT . '/pages/profile.php';
	}
?>