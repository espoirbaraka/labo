<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update'])){
        $newetat = $_POST['newetat'];
        $newaffectation = $_POST['newaffectation'];
        $newetiquette = $_POST['newetiquette'];
        $obs = $_POST['obs'];
        $adaptateur = $_POST['id'];
        $date=date('Y-m-d');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("UPDATE t_adaptateur SET CodeEtatMateriel=:etat, CodeAffectation=:affectation, Etiquette=:etiquette, Observation=:obs, Modified_on=:today WHERE CodeAdaptateur=:adaptateur");
                $stmt->execute(['etat'=>$newetat, 'affectation'=>$newaffectation, 'etiquette'=>$newetiquette, 'obs'=>$obs, 'today'=>$date, 'adaptateur'=>$adaptateur]);
				$_SESSION['success'] = 'Les modifications ont été effectué avec succès';
               
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire';
	}

	header("location: ../detailAdaptateur.php?id=$adaptateur");

?>
