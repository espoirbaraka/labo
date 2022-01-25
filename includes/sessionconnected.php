<?php
	include 'conn.php';
	session_start();

	if(!isset($_SESSION['CodeUser']) || trim($_SESSION['CodeUser']) == '' || !isset($_SESSION['CodeService'])){
		header('location: ./index.php');
		exit();
	}

	$conn = $pdo->open();
	$service=$_SESSION['CodeService'];
	$stmt = $conn->prepare("SELECT * FROM t_user
							INNER JOIN t_service
							ON t_user.CodeService=t_service.CodeService
							WHERE CodeUser=:code");
	$stmt->execute(['code'=>$_SESSION['CodeUser']]);
	$user = $stmt->fetch();

	$pdo->close();

?>