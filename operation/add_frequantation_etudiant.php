<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['autoriser'])){
        $ordinateur = $_POST['ordinateur'];
        $frequantant = $_POST['id'];
        $date=date('Y-m-d');
        $time = date('H:i:s');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_frequantation(CodeFrequantant, CodeCategorieFrequantant, CodeType, Status, CodeMateriel, Date, HeureArrive, CodeService) VALUES(:frequantant, :categ, :type, :status, :materiel, :date, :heurearrive, :service)");
                $stmt->execute(['frequantant'=>$frequantant, 'categ'=>1, 'type'=>1, 'status'=>1, 'materiel'=>$ordinateur, 'date'=>$date, 'heurearrive'=>$time, 'service'=>$service]);
				$_SESSION['success'] = 'Accès enregistré';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../frequantantEtudiant.php');

?>
