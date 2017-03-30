<?php 

require '../../app/start.php';

	if (!empty($_POST)) {
	$id 		= $_POST['id'];
	$name 		= $_POST['name'];
	$title 		= $_POST['title'];
	$detail 	= $_POST['detail'];

	$updatePage = $db->prepare("
		UPDATE pages
		SET
			name 		= :name,
			title 		= :title,
			detail 		= :detail
		WHERE id = :id
	");

	$updatePage->execute([
		'id' 		=> $id,
		'name'		=> $name,
		'title'		=> $title,
		'detail' 	=> $detail,
	]);

	header('Location: ' . BASE_URL . '/admin/pages/list.php');
}


if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . '/admin/pages/list.php');
	die(); 
}

$pagesList = $db->prepare("
	SELECT 	id,name,title,detail
	FROM 	pages
	WHERE 	id = :id
");

$pagesList->execute(['id' => $_GET['id']]);

$pagesList = $pagesList->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/pages/edit.php';

?>