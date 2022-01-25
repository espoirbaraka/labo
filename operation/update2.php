<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update2'])){
        $newsysteme = $_POST['newsysteme'];
        $newdisque = $_POST['newdisque'];
        $newetat = $_POST['newetat'];
        $ordi = $_POST['id'];
        $date=date('Y-m-d');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("UPDATE t_materiel SET CodeOS=:os, CodeCapaciteHDD=:hdd, CodeEtatMateriel=:etat, Modified_on=:today WHERE CodeMateriel=:ordi");
                $stmt->execute(['os'=>$newsysteme, 'hdd'=>$newdisque, 'etat'=>$newetat, 'today'=>$date, 'ordi'=>$ordi]);
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
