<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update'])){
        $id = $_POST['id'];
        $marque = $_POST['marque'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("UPDATE t_categorie_materiel SET Designation=:design WHERE CodeCategorie=:code");
                $stmt->execute(['design'=>$marque, 'code'=>$id]);
				$_SESSION['success'] = 'Materiel modifié';

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