<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update'])){
        $password = sha1($_POST['password']);
        $id = $_POST['id'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("UPDATE t_user SET Password=:password WHERE CodeUser=:code");
                $stmt->execute(['password'=>$password, 'code'=>$id]);
				$_SESSION['success'] = 'Mot de passe modifié';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire';
	}

	header("location: ../user.php");

?>
