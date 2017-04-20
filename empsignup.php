<?php 
	require 'app/start.php';

    if(!empty($_POST)) 
    {
    	// checks if the user fills out fields
    	if(empty($_POST['username'])) 
        	{ die("Please enter a username."); } 
        if(empty($_POST['password'])) 
        	{ die("Please enter a password."); } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        	{ die("Invalid E-Mail Address"); } 
    

    	 // Check if the username is already taken
        $query = " 
            SELECT 
                1 
            FROM employer
            WHERE 
                username = :username 
        "; 
        $query_params = array( ':username' => $_POST['username'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ die("This username is already in use"); } 
        $query = " 
            SELECT 
                1 
            FROM employer
            WHERE 
                email = :email 
        "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("This email address is already registered"); } 
         
        // Add row to database 
        $query = "
        	INSERT INTO employer(
        	username,
        	password,
        	salt,
        	email,
            firstname,
            lastname,
            worksector,
            companyname,
            worktitle,
            workdepartment
            ) VALUES(
        	:username,
        	:password,
        	:salt,
        	:email,
            :firstname,
            :lastname,
            :worksector,
            :companyname,
            :worktitle,
            :workdepartment
      
        	)
        ";

        // Security measures
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
        $password = hash('sha256', $_POST['password'] . $salt); 
        for($round = 0; $round < 65536; $round++) { $password = hash('sha256', $password . $salt); }
        $query_params = array(
        	':username'     => $_POST['username'], 
            ':password'     => $password, 
            ':salt'         => $salt, 
            ':email'        => $_POST['email'], 
            ':firstname'    => $_POST['firstname'],
            ':lastname'     => $_POST['lastname'],
            ':worksector'   => $_POST['worksector'],
            ':companyname'  => $_POST['companyname'],
            ':worktitle'    => $_POST['worktitle'],
            ':workdepartment'=>$_POST['workdepartment'],
        	);
    		try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){die("Failed to run query: " . $ex->getMessage()); }
        header("Location: ".BASE_URL);
        die("Redirecting to ".BASE_URL);
    }


	require VIEW_ROOT . '/pages/empsignup.php';
?>
