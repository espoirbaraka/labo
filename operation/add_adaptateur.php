<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
		$marque = $_POST['marque'];
		$tension = $_POST['tension'];
		$puissance = $_POST['puissance'];
		$affectation = $_POST['affectation'];
        $etiquette = $_POST['etiquette'];
        $dateacq = $_POST['dateacq'];
        $etat = $_POST['etat'];
        $today = date('Y-m-d');

		$conn = $pdo->open();
        $etiq = $conn->prepare("SELECT * FROM t_adaptateur WHERE Etiquette = :etiquette AND CodeService=:service");
        $etiq->execute(['etiquette'=>$etiquette, 'service'=>$service]);
        $adaptateurexist=$etiq->rowCount();
        if($adaptateurexist == 0){

            try{
                $stmt = $conn->prepare("INSERT INTO t_adaptateur(TensionAdaptateur, CodeEtatMateriel, PuissanceAdaptateur, CodeMarqueAdaptateur, CodeAffectation, Etiquette, DateAcquisition, Created_on, CodeService) VALUES(:tension, :etat, :puissance, :marque, :affectation, :etiquette, :dateacq, :today, :service)");
                $stmt->execute(['tension'=>$tension, 'etat'=>$etat, 'puissance'=>$puissance, 'marque'=>$marque, 'affectation'=>$affectation, 'etiquette'=>$etiquette, 'dateacq'=>$dateacq, 'today'=>$today, 'service'=>$service]);
				$_SESSION['success'] = 'Adaptateur ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

        }
        else
        {
            $_SESSION['error'] = '!!! NON AJOUTE car Il existe déjà un adaptateur avec le meme etiquette'; 
        }
			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../adaptateur.php');

?>
