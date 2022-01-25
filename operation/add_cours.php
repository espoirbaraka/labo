<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $cours = $_POST['cours'];
        $enseignant = $_POST['enseignant'];
		$auditoire = $_POST['auditoire'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_cours(DesignationCours, Enseignant, CodeAuditoire) VALUES(:cours, :enseignant, :auditoire)");
                $stmt->execute(['cours'=>$cours, 'enseignant'=>$enseignant, 'auditoire'=>$auditoire]);
				$_SESSION['success'] = 'Cours ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../frequantantPromotion.php');

?>
