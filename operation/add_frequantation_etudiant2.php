<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['autoriser'])){
        $categ = $_POST['equip'];
        $materiel = $_POST['materiel'];
        $frequantant = $_POST['freq'];
        $date=date('Y-m-d');
        $time = date('H:i:s');

		$conn = $pdo->open();

        $compatibilite = $conn->prepare("SELECT * FROM t_materiel WHERE CodeCategorieMateriel = :categ AND CodeMateriel=:materiel");
		$compatibilite->execute(['categ'=>$categ, 'materiel'=>$materiel]);
		$compatibiliteexist = $compatibilite->rowCount();
        if($compatibiliteexist == 1)
        {
            try{
                $stmt = $conn->prepare("INSERT INTO t_frequantation(CodeFrequantant, CodeCategorieFrequantant, CodeType, Status, CodeMateriel, Date, HeureArrive, CodeService) VALUES(:frequantant, :categ, :type, :status, :materiel, :date, :heurearrive, :service)");
                $stmt->execute(['frequantant'=>$frequantant, 'categ'=>1, 'type'=>1, 'status'=>1, 'materiel'=>$materiel, 'date'=>$date, 'heurearrive'=>$time, 'service'=>$service]);
				$_SESSION['success'] = 'Accès enregistré';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

        }else{
            $_SESSION['error'] = 'Pas de compatibilité entre le materiel choisi et l\'étiquette choisi';
        }
			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../frequantantEtudiant.php');

?>
