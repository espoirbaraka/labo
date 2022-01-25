<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
		$marque = $_POST['marque'];
        $etiquette = $_POST['etiquette'];
		$affectation = $_POST['affectation'];
        $dateacq = $_POST['dateacq'];
        $etat = $_POST['etat'];
        $couleur = $_POST['couleur'];
        $nombre = $_POST['nombre'];
        $today = date('Y-m-d');

		$conn = $pdo->open();


        $rallonge = $conn->prepare("SELECT * FROM t_materiel WHERE Etiquette = :etiquette");
		$rallonge->execute(['etiquette'=>$etiquette]);
        $matriculeexist = $rallonge->rowCount();
        if($matriculeexist == 0)
        {

        
            try{
                $stmt = $conn->prepare("INSERT INTO t_materiel(CodeCategorieMateriel, CodeCouleur, CodeMarqueRallonge, Etiquette, DateAcquisition, CodeAffectation, CodeEtatMateriel, Created_on, NombrePriseRallonge) VALUES(:materiel, :couleur, :marque, :etiquette, :dateacq, :affectation, :etat, :today, :nombre)");
                $stmt->execute(['materiel'=>6, 'couleur'=>$couleur, 'marque'=>$marque, 'etiquette'=>$etiquette, 'dateacq'=>$dateacq, 'affectation'=>$affectation, 'etat'=>$etat, 'today'=>$today, 'nombre'=>$nombre]);
				$_SESSION['success'] = 'Rallonge ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

        }
        else
        {
            $_SESSION['error'] = 'Non enregistré!!! Etiquette existant';
        }
			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../rallonge.php');

?>
