<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['remove'])){
        $id = $_POST['id'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("DELETE FROM t_user WHERE CodeUser=:code");
                $stmt->execute(['code'=>$id]);
				$_SESSION['success'] = 'Utilisateur supprimé';

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
