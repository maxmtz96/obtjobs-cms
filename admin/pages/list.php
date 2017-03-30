<?php
	require '../../app/start.php';

	$pages = $db->query("
			SELECT id,name,title,detail
			FROM pages

	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/admin/pages/list.php';
?>