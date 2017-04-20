<?php 
	require 'app/start.php';
	
	$submitted_username = ''; 
	$login_ok = '';

	if (!empty($_POST)) { 
		$query = "
			SELECT *
			FROM employer
			WHERE
				username = :username
			";
		$query_params = array(':username' => $_POST['username']);

		try{
			$stmt = $db->prepare($query);
			$result = $stmt->execute($query_params);
		}
		catch(PDOException $ex)
    	{ 
      		die("Failed to run query: " . $ex->getMessage()); 
  		}

		$row = $stmt->fetch(); 
		// Security measures for password
		if ($row) {

			$check_password = hash('sha256', $_POST['password'] . $row['salt']);
			for($round = 0; $round < 65536; $round++){
				 $check_password = hash('sha256', $check_password . $row['salt']);
			}
			
			// checks if password is correct
			if ($check_password === $row ['password']){
				$login_ok = true;
			}
			else{
				$login_ok = false;
			}
		}

	if ($login_ok) { // when successful login does not allow salt and password to be called again 
		unset($row['salt']);
		unset($row['password']);
		$_SESSION['employer'] = $row;
		
		header("Location: ".BASE_URL);
		die("Redirecting to: ".BASE_URL);
	}
	else{ // if failed login, prints string 
		print("Failed to login");
		$submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
		}
	}


	require VIEW_ROOT . '/pages/emplogin.php';
?>
