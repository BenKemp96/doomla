<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doomla - Login</title>
</head>
<body>
	<h1>Log in</h1>
	<form action="login.logic.php" method="post">
		<table>
			<tr>
				<td>username: </td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>password: </td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td><input type="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>