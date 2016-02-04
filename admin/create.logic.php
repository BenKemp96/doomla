<?php
	$page = ($_POST['page'] != '') ? $_POST['page'] : header('location: create.php');
	$menuoption = ($_POST['menuoption'] != '') ? $_POST['menuoption'] : header('location: create.php');
	$menuorder = ($_POST['menuorder'] != '') ? $_POST['menuorder'] : header('location: create.php');
	$content = ($_POST['content'] != '') ? $_POST['content'] : header('location: create.php');
	$template = ($_POST['template'] != '') ? $_POST['template'] : header('location: create.php');

	require "../databaselink.php";
	$query = "INSERT INTO pagecontent (page, menuoption, menuorder, template, content) VALUES ('$page', '$menuoption', '$menuorder', '$template', '$content')";
	$result = $link->query($query);

	if($result) {
		header('location: index.php');
	} else {
		echo "Something went wrong";
	}