<?php 
	require 'app/start.php';


// calls all from user table in the database 
	// $users = $db->query("
	// 		 SELECT *
	// 		 FROM users

	// 		 ORDER BY RAND()
	// 		 LIMIT 2
	// 	")->fetchAll(PDO::FETCH_ASSOC);




		// $maxid = $db->prepare("SELECT id,image FROM users ORDER BY id DESC LIMIT 1");
		// $maxid->execute();
		// $minid = $db->prepare("SELECT id,image FROM users ORDER BY id ASC LIMIT 1");
		// $minid->execute();

		// $largestId = $maxid->fetch(PDO::FETCH_ASSOC);
		// $smallestId = $minid->fetch(PDO::FETCH_ASSOC);


		// $rand1 = rand($smallestId['id'], $largestId['id']);
		// $rand2 = rand($smallestId['id'], $largestId['id']);
		// $rand3 = rand($smallestId['id'], $largestId['id']);	

		// if(($rand1 === $rand2) && ($rand2 != $rand3 || $rand1 != $rand3)){
		// 	$rand2 = rand($minid, $maxid);
		// }
		// elseif(($rand1 === $rand3) && ($rand1 != $rand2 || $rand3 != $rand2)){
		// 	$rand3 = rand($minid, $maxid);
		// } 
		// elseif(($rand2 === $rand3) && ($rand2 != $rand1 || $rand3 != $rand1)){
		// 	$rand3;
		// }
		// elseif($rand1 != $rand2 && $rand1 != $rand3 && $rand2 != $rand3){
		// 	echo $rand1." <br>" ;
		// 	echo $rand2." <br> ";
		// 	echo $rand3;
		// }






	$users = $db->prepare("SELECT * FROM users ORDER BY RAND()");
	$users->bindParam(1,$rand1);
	$users->bindParam(2,$rand2);
	$users->bindParam(3,$rand3);
	$users->execute();

	require VIEW_ROOT . '/home.php';
?>
