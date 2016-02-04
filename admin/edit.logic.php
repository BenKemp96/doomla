<?php
	$id = ($_POST['id'] != '') ? $_POST['id'] : header('location: edit.php');
	$page = ($_POST['page'] != '') ? $_POST['page'] : header('location: edit.php');
	$menuoption = ($_POST['menuoption'] != '') ? $_POST['menuoption'] : header('location: edit.php');
	$menuorder = ($_POST['menuorder'] != '') ? $_POST['menuorder'] : header('location: edit.php');
	$content = ($_POST['content'] != '') ? $_POST['content'] : header('location: edit.php');
	$template = ($_POST['template'] != '') ? $_POST['template'] : header('location: edit.php');

	require "../databaselink.php";
	$query = "UPDATE pagecontent SET page='$page', menuoption='$menuoption', content='$content', menuorder='$menuorder', template='$template' WHERE id=$id";
	$result = $link->query($query);

	if($result) {
		header('location: index.php');
	} else {
		echo "Something went wrong";
	}