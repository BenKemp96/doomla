<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doomla - Create</title>
	<link rel="stylesheet" href="css/create.css">
</head>
<body>
	<h1>Page Details</h1>
	<form action="create.logic.php" method="post">
		<table>
			<tr>
				<td>Page Name:</td>
				<td class="property"><input type="text" name="page" required></td>
			</tr>
			<tr>
				<td>Menu Title:</td>
				<td class="property"><input type="text" name="menuoption" required></td>
			</tr>
			<tr>
				<td>Menu Order:</td>
				<td class="property"><input type="number" name="menuorder" required></td>
			</tr>
			<tr>
				<td>Template</td>
				<td class="property"><input type="text" name="template" required></td>
			</tr>
			<tr>
				<td>Content</td>
				<td class="property content"><input type="text" name="content" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"><a href="index.php">Cancel</a></td>
			</tr>
		</table>
	</form>
</body>
</html>