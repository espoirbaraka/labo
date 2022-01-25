<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $marque = $_POST['marque'];
        $taille = $_POST['taille'];
		$affectation = $_POST['affectation'];
        $dateacq = $_POST['dateacq'];
        $etat = $_POST['etat'];
        $couleur = $_POST['couleur'];
        $etiquette = $_POST['etiquette'];
        $today = date('Y-m-d');

		$conn = $pdo->open();
 
            try{
                $stmt = $conn->prepare("INSERT INTO t_materiel(CodeCategorieMateriel, CodeTailleEcran, Etiquette, CodeCouleur, CodeMarqueEcran, DateAcquisition, CodeAffectation, CodeEtatMateriel, Created_on) VALUES(:materiel, :taille, :etiquette, :couleur, :marque, :dateacq, :affectation, :etat, :today)");
                $stmt->execute(['materiel'=>9, 'taille'=>$taille, 'etiquette'=>$etiquette, 'couleur'=>$couleur, 'marque'=>$marque, 'dateacq'=>$dateacq, 'affectation'=>$affectation, 'etat'=>$etat, 'today'=>$today]);
				$_SESSION['success'] = 'Ecran ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../ecran.php');

?>
