<?php
	$id = $id = ($_GET['id'] != NULL) ? $_GET['id'] : header('location: index.php');

	require "../databaselink.php";
	$query = "DELETE FROM pagecontent WHERE id='$id'";
	$result = $link->query($query);

	if($result) {
		header('location: index.php');
	} else {
		echo "Something went wrong";
	}