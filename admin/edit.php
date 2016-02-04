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
	<title>Doomla - Create</title>
	<link rel="stylesheet" href="css/create.css">
</head>
<body>
	<h1>Page Details</h1>
	<form action="edit.logic.php" method="post">
		<input type="hidden" name="id" value="<?= $id ?>">
		<table>
			<tr>
				<td>Page Name:</td>
				<td class="property"><input type="text" name="page" value="<?= $fetch[0]['page'] ?>"></td>
			</tr>
			<tr>
				<td>Menu Title:</td>
				<td class="property"><input type="text" name="menuoption" value="<?= $fetch[0]['menuoption'] ?>"></td>
			</tr>
			<tr>
				<td>Menu Order:</td>
				<td class="property"><input type="number" name="menuorder" value="<?= $fetch[0]['menuorder'] ?>"></td>
			</tr>
			<tr>
				<td>Template</td>
				<td class="property"><input type="text" name="template" value="<?= $fetch[0]['template'] ?>"></td>
			</tr>
			<tr>
				<td>Content</td>
				<td class="property content"><input type="text" name="content" value="<?= $fetch[0]['content'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"><a href="index.php">Cancel</a></td>
			</tr>
		</table>
	</form>
</body>
</html>