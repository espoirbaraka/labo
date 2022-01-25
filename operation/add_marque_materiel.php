<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $marque = $_POST['marque'];
        $today=date('Y-m-d');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_categorie_materiel(Designation, Created_on, CodeService, Status) VALUES(:marque, :today, :service, :status)");
                $stmt->execute(['marque'=>$marque, 'today'=>$today, 'service'=>$service, 'status'=>1]);
				$_SESSION['success'] = 'Marque ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../categoriemateriel.php');

?>
