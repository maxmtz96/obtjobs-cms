<?php 
	require 'app/start.php';


    if(empty($_SESSION['user']))    // checks if theirs a session if not redirects to index.php
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
    else{
    	require VIEW_ROOT . '/pages/secret.php';
    }	

    if(isset($_FILES['files'])) {       // uploads picture to the database 
    	foreach($_FILES['files']['name'] as $file=> $name) {
    		$filename = $name;
    		try{
    			if(move_uploaded_file($_FILES['files']['tmp_name'][$file],'uploads/'.$filename)) {
    				$stmt = $db->prepare("UPDATE users SET image = :image WHERE id = :id");
    				$stmt->bindParam(":image", $filename);
    				$stmt->bindParam(":id", $_SESSION['user']['id']);
    				$stmt->execute();
    			}
    		} catch(Exception $e) {
    			echo $e;
    		} 
    	}
    }		
?>
