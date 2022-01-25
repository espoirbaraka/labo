<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
		$modele = $_POST['modele'];
		$affectation = $_POST['affectation'];
        $dateacq = $_POST['dateacq'];
        $etat = $_POST['etat'];
        $couleur = $_POST['couleur'];
        $etiquette = $_POST['etiquette'];
        $today = date('Y-m-d');

		$conn = $pdo->open();
 
            try{
                $stmt = $conn->prepare("INSERT INTO t_materiel(CodeCategorieMateriel, Etiquette, CodeCouleur, CodeMarqueReader, DateAcquisition, CodeAffectation, CodeEtatMateriel, Created_on) VALUES(:materiel, :etiquette, :couleur, :modele, :dateacq, :affectation, :etat, :today)");
                $stmt->execute(['materiel'=>7, 'etiquette'=>$etiquette, 'couleur'=>$couleur, 'modele'=>$modele, 'dateacq'=>$dateacq, 'affectation'=>$affectation, 'etat'=>$etat, 'today'=>$today]);
				$_SESSION['success'] = 'Reader ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../reader.php');

?>
