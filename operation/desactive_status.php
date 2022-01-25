<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update'])){
        $id = $_POST['id'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("UPDATE t_categorie_materiel SET Status=:status WHERE CodeCategorie=:code");
                $stmt->execute(['status'=>0, 'code'=>$id]);
				$_SESSION['success'] = 'Materiel desactivé';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire';
	}

	header("location: ../categoriemateriel.php");

?>
