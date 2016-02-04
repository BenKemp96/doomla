<?php
	$user = ($_POST['username'] != '') ? $_POST['username'] : header('location: login.php');
	$pass = ($_POST['password'] != '') ? $_POST['password'] : header('location: login.php');

	require "../databaselink.php";
	$stmt = $link->prepare("SELECT * FROM users WHERE username=? AND password=?");
	$stmt->bind_param("ss", $user, $pass);
	
	$stmt->execute();

	$result = $stmt->get_result();
	$fetch = $result->fetch_all(MYSQLI_ASSOC);

	function setSession($username){
		$token = rand(1, 9999999);
		$expiry = time()+600;
		
	}

	setSession($fetch[0]['username']);