<?php
	$id = ($_GET['id'] != NULL) ? $_GET['id'] : header('location: index.php');

	require "../databaselink.php";
	$query = "SELECT * FROM pagecontent WHERE id='$id'";
	$result = $link->query($query);
	$fetch = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doomla - Delete</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Delete Page?</h1>
	<p>Are you sure you want to delete this page:</p>
	<button><a href="delete.logic.php?id=<?=$id?>">Yes</a></button>
	<button><a href="index.php">No</a></button><br><br>
	<table>
		<tr>
			<td>Page: </td>
			<td><?= $fetch[0]['page'] ?></td>
		</tr>
		<tr>
			<td>Menu Title: </td>
			<td><?= $fetch[0]['menuoption'] ?></td>
		</tr>
	</table>
	<p>Content: <?= $fetch[0]['content'] ?></p>
</body>
</html>