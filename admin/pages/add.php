<?php 

require '../../app/start.php';

	if (!empty($_POST)) {
		$name 		= $_POST['name'];
		$title 		= $_POST['title'];
		$detail 	= $_POST['detail'];


		$insertPage = $db->prepare("
			INSERT INTO pages (name, title, detail)
			VALUES (:name, :title, :detail)
			");
		$insertPage->execute([
			'name'      => $name,
			'title'  	=> $title,
			'detail'    => $detail
		]);

		header('Location: ' . BASE_URL . '/admin/pages/list.php');
	}
	

require VIEW_ROOT . '/admin/pages/add.php'; 

?>