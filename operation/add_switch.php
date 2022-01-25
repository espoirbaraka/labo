<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
		$marque = $_POST['marque'];
		$affectation = $_POST['affectation'];
        $dateacq = $_POST['dateacq'];
        $etat = $_POST['etat'];
        $couleur = $_POST['couleur'];
        $etiquette = $_POST['etiquette'];
		$port = $_POST['port'];
        $today = date('Y-m-d');

		$conn = $pdo->open();
 
            try{
                $stmt = $conn->prepare("INSERT INTO t_materiel(CodeCategorieMateriel, Etiquette, CodeCouleur, CodeMarqueSwitch, DateAcquisition, CodeAffectation, CodeEtatMateriel, Created_on, CodeService, NombrePortSwitch) VALUES(:materiel, :etiquette, :couleur, :marque, :dateacq, :affectation, :etat, :today, :service, :port)");
                $stmt->execute(['materiel'=>3, 'etiquette'=>$etiquette, 'couleur'=>$couleur, 'marque'=>$marque, 'dateacq'=>$dateacq, 'affectation'=>$affectation, 'etat'=>$etat, 'today'=>$today, 'service'=>$service, 'port'=>$port]);
				$_SESSION['success'] = 'Routeur ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../switch.php');

?>
