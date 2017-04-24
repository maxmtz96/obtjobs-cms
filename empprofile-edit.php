<?php 
	require 'app/start.php';

	if(empty($_SESSION['employer']))
	{
		header("Location; ".BASE_URL);
		die ("Redirecting to ".BASE_URL);
	} 
	else{
		$username = $_GET['employer'];

		$employer = $db->prepare("SELECT * FROM employer WHERE username = :username LIMIT 1");
		$employer->bindParam(':username', $_SESSION['employer']['username']);
		$employer->execute(['username' => $username]);
		$employer = $employer->fetch(PDO::FETCH_ASSOC);

		if(!empty($_POST)) {
			$aboutme 	= $_POST['aboutme'];
			$github 	= $_POST['github'];
			$linkedin 	= $_POST['linkedin'];

			$perskill1 	= $_POST['perskill1'];
			$perskill2 	= $_POST['perskill2'];
			$perskill3 	= $_POST['perskill3'];
			$perskill4 	= $_POST['perskill4'];
			//$perskill5 = $_POST['perskill5'];
			//$perskill6 = $_POST['perskill6'];

			$exploca1 	= $_POST['exploca1'];
			$exptitle1 	= $_POST['exptitle1'];
			//$expdura1 = $_POST['expdura1'];
			$expdesc1 	= $_POST['expdesc1'];

			$eduloca1 	= $_POST['eduloca1'];
			$edutitle1 	= $_POST['edutitle1'];
			//$edudura1 = $_POST['edudura1'];
			$edudesc1 	= $_POST['edudesc1'];

			$proskill1 	= $_POST['proskill1'];
			$proskill2 	= $_POST['proskill2'];
			$proskill3 	= $_POST['proskill3'];
			$proskill4 	= $_POST['proskill4'];
			$proskill5 	= $_POST['proskill5'];
			$proskill6 	= $_POST['proskill6'];
			$address   	= $_POST['address'];
			$phone 		= $_POST['phone'];

			if($_FILES['files']['error'][0] != 4) {
				foreach($_FILES['files']['name'] as $file => $name){
					$filename = $name;
					
					try{
						if(move_uploaded_file($_FILES['files']['tmp_name'][$file],'uploads/'.$filename)) {
							$updateInfo = $db->prepare("
								UPDATE employer
								SET image 		= :image,
									aboutme    	= :aboutme,
									github 		= :github,
									linkedin 	= :linkedin,

									perskill1  	= :perskill1,
									perskill2  	= :perskill2,
									perskill3  	= :perskill3,
									perskill4  	= :perskill4,

									exploca1   	= :exploca1,
									exptitle1  	= :exptitle1,
									expdesc1   	= :expdesc1,

									eduloca1 	= :eduloca1,
									edutitle1 	= :edutitle1,
									edudesc1 	= :edudesc1,

									proskill1  	= :proskill1,
									proskill2  	= :proskill2,
									proskill3  	= :proskill3,
									proskill4  	= :proskill4,
									proskill5  	= :proskill5,
									proskill6  	= :proskill6,
									address    	= :address,
									phone 		= :phone

								WHERE id = :id
								");

							$updateInfo->bindParam(":image", $filename);
							$updateInfo->bindParam(":id", $_SESSION['user']['id']);
							$updateInfo->bindParam(":aboutme", $aboutme);
							$updateInfo->bindParam(":github", $github);
							$updateInfo->bindParam(":linkedin", $linkedin);
							$updateInfo->bindParam(":perskill1", $perskill1);
							$updateInfo->bindParam(":perskill2", $perskill2);
							$updateInfo->bindParam(":perskill3", $perskill3);
							$updateInfo->bindParam(":perskill4", $perskill4);
							$updateInfo->bindParam(":exploca1", $exploca1);
							$updateInfo->bindParam(":exptitle1", $exptitle1);
							$updateInfo->bindParam(":expdesc1", $expdesc1);
							$updateInfo->bindParam(":eduloca1", $eduloca1);
							$updateInfo->bindParam(":edutitle1",$edutitle1);
							$updateInfo->bindParam(":edudesc1", $edudesc1);
							$updateInfo->bindParam(":proskill1", $proskill1);
							$updateInfo->bindParam(":proskill2", $proskill2);
							$updateInfo->bindParam(":proskill3", $proskill3);
							$updateInfo->bindParam(":proskill4", $proskill4);
							$updateInfo->bindParam(":proskill5", $proskill5);
							$updateInfo->bindParam(":proskill6", $proskill6);
							$updateInfo->bindParam(":address", $address);
							$updateInfo->bindParam(":phone", $phone);

							$updateInfo->execute();
						}
					} catch(Exception $e){
						echo $e;
					}
				}
			} else {
				$updateInfo = $db->prepare("
				UPDATE users
				SET
					aboutme    = :aboutme,
					github 		= :github,
					linkedin 	= :linkedin,

					perskill1  = :perskill1,
					perskill2  = :perskill2,
					perskill3  = :perskill3,
					perskill4  = :perskill4,
			

					exploca1   = :exploca1,
					exptitle1  = :exptitle1,
					expdesc1   = :expdesc1,

					eduloca1 = :eduloca1,
					edutitle1 = :edutitle1,
					edudesc1 = :edudesc1,

					proskill1  = :proskill1,
					proskill2  = :proskill2,
					proskill3  = :proskill3,
					proskill4  = :proskill4,
					proskill5  = :proskill5,
					proskill6  = :proskill6,
					address    = :address,
					phone = :phone

					WHERE id=:id
				");

				$updateInfo->bindParam(":id",$_SESSION['user']['id']);
				$updateInfo->bindParam(":aboutme", $aboutme);
				$updateInfo->bindParam(":perskill1", $perskill1);
				$updateInfo->bindParam(":perskill2", $perskill2);
				$updateInfo->bindParam(":perskill3", $perskill3);
				$updateInfo->bindParam(":perskill4", $perskill4);
				$updateInfo->bindParam(":exploca1", $exploca1);
				$updateInfo->bindParam(":exptitle1", $exptitle1);
				$updateInfo->bindParam(":expdesc1", $expdesc1);
				$updateInfo->bindParam(":eduloca1", $eduloca1);
				$updateInfo->bindParam(":edutitle1",$edutitle1);
				$updateInfo->bindParam(":edudesc1", $edudesc1);
				$updateInfo->bindParam(":proskill1", $proskill1);
				$updateInfo->bindParam(":proskill2", $proskill2);
				$updateInfo->bindParam(":proskill3", $proskill3);
				$updateInfo->bindParam(":proskill4", $proskill4);
				$updateInfo->bindParam(":proskill5", $proskill5);
				$updateInfo->bindParam(":proskill6", $proskill6);
				$updateInfo->bindParam(":address", $address);
				$updateInfo->bindParam(":phone", $phone);

				$updateInfo->execute();
			}
		}
		
		require VIEW_ROOT . '/pages/empprofile-edit.php';
	}
?>