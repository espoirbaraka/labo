<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $id = $_POST['id'];
		$marque = $_POST['marque'];
        $modele = $_POST['modele'];
		$affectation = $_POST['affectation'];
        $dateacq = $_POST['dateacq'];
        $etat = $_POST['etat'];
        $couleur = $_POST['couleur'];
        $etiquette = $_POST['etiquette'];
		$port = $_POST['port'];
        $today = date('Y-m-d');

		$conn = $pdo->open();
 
            try{
                $stmt = $conn->prepare("INSERT INTO t_materiel(CodeCategorieMateriel, Etiquette, CodeCouleur, CodeMarque, CodeModele, DateAcquisition, CodeAffectation, CodeEtatMateriel, Created_on, CodeService, NombrePort) VALUES(:materiel, :etiquette, :couleur, :marque, :modele, :dateacq, :affectation, :etat, :today, :service, :port)");
                $stmt->execute(['materiel'=>$id, 'etiquette'=>$etiquette, 'couleur'=>$couleur, 'marque'=>$marque, 'modele'=>$modele, 'dateacq'=>$dateacq, 'affectation'=>$affectation, 'etat'=>$etat, 'today'=>$today, 'service'=>$service, 'port'=>$port]);
				$_SESSION['success'] = 'Materiel ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../equipement.php?id='.$id);

?>
