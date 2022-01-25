<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update1'])){
        $newaffectation = $_POST['newaffectation'];
        $newusername = $_POST['newusername'];
        $newobservation = $_POST['newobservation'];
        $ordi = $_POST['id'];
        $date=date('Y-m-d');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("UPDATE t_materiel SET CodeAffectation=:affectation, User=:user, Observation=:observ, Modified_on=:today WHERE CodeMateriel=:ordi");
                $stmt->execute(['affectation'=>$newaffectation, 'user'=>$newusername, 'observ'=>$newobservation, 'today'=>$date, 'ordi'=>$ordi]);
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

	header("location: ../detailOrdinateur.php?id=$ordi");

?>
