<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['autoriser'])){
        $frequantant = $_POST['id'];
        $date=date('Y-m-d');
        $time = date('H:i:s');
		$cours=$_POST['cours'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM t_cours WHERE CodeAuditoire = ? AND CodeCours=?");
        $stmt->execute(array($frequantant, $cours));
		$agentexist = $stmt->rowCount();

		if($agentexist > 0){
			try{
                $stmt = $conn->prepare("INSERT INTO t_frequantation(CodeAuditoire, CodeCours, CodeCategorieFrequantant, Status, Date, HeureArrive, CodeService) VALUES(:frequantant, :cours, :categ, :status, :date, :heurearrive, :service)");
                $stmt->execute(['frequantant'=>$frequantant, 'cours'=>$cours, 'categ'=>2, 'status'=>1, 'date'=>$date, 'heurearrive'=>$time, 'service'=>$service]);
				$_SESSION['success'] = 'Accès enregistré pour l\'auditoire';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}else{
			
			$_SESSION['error'] = 'Ce cours n\'est pas de cette promotion';
		}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../accesAuditoire.php');

?>
