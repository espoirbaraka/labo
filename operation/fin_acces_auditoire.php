<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['fin'])){
        $code = $_POST['id'];
		$heurefin = date('H:i:s');


		$conn = $pdo->open();

        
		try{
			$stmt = $conn->prepare("UPDATE t_frequantation SET HeureDepart =:heurefin, Status=0 WHERE CodeFrequantation=:code");
			$stmt->execute(['heurefin'=>$heurefin, 'code'=>$code]);
			$_SESSION['success'] = 'Merci';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Complétez le formulaire de modification de l\'ordinateur';
	}

	header('location: ../accesAuditoire.php');

?>
