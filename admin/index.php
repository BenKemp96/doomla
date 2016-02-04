<?php
	require "../databaselink.php";
	$query = $query = "SELECT * FROM pagecontent";
	$result = $link->query($query);
	$pagecontent = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doomla - Admin</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<a href="create.php">Add Page</a>
	<table>
		<tr>
			<th>Page</th>
			<th>Content</th>
			<th>Menu Option</th>
			<th>Menu Order</th>
		</tr>
<?php	
	foreach ($pagecontent as $tablerow) { 
?>
		<tr>
			<td><?= $tablerow['page'] ?></td>
			<td><?= $tablerow['content'] ?></td>
			<td><?= $tablerow['menuoption'] ?></td>
			<td><?= $tablerow['menuorder'] ?></td>
			<td><a href="edit.php?id=<?= $tablerow['id'] ?>">Edit Page</a></td>
			<td><a href="delete.php?id=<?= $tablerow['id'] ?>">Delete Page</a></td>
		</tr>
<?php	
	}
?>
	</table>
</body>
</html>