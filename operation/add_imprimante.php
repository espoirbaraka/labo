<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
		$marque = $_POST['marque'];
        $puissance = $_POST['puissance'];
        $numero = $_POST['numero'];
		$affectation = $_POST['affectation'];
        $dateacq = $_POST['dateacq'];
        $etat = $_POST['etat'];
        $couleur = $_POST['couleur'];
        $today = date('Y-m-d');

		$conn = $pdo->open();

            try{
                $stmt = $conn->prepare("INSERT INTO t_materiel(CodeCategorieMateriel, CodeCouleur, CodeMarqueImprimante, NumeroImprimante, CodePuissanceImprimante, DateAcquisition, CodeAffectation, CodeEtatMateriel, Created_on) VALUES(:materiel, :couleur, :marque, :numero, :puissance, :dateacq, :affectation, :etat, :today)");
                $stmt->execute(['materiel'=>8, 'couleur'=>$couleur, 'marque'=>$marque, 'numero'=>$numero, 'puissance'=>$puissance, 'marque'=>$marque, 'dateacq'=>$dateacq, 'affectation'=>$affectation, 'etat'=>$etat, 'today'=>$today]);
				$_SESSION['success'] = 'Imprimante ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

        
			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../imprimante.php');

?>
