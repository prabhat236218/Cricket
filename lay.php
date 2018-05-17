<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Welcome to the Arena</h2>
	<a href="admin.php" target="_blank"> <button  type="button" class="btn2" > Admin </button></a>
    <a href="cri.html" target="_parent"> <button  type="button" class="btn2" > Cricket</button></a>
    <a href="football.html" target="_parent"> <button  type="button" class="btn2" > Football</button></a>
    <a href="" target="_parent"> <button  type="button" class="btn2" >Hockey</button></a>
    
   
</body>
</html>