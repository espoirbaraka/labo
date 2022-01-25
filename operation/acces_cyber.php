<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $siege = $_POST['siege'];
        $frequantant = $_POST['id'];
        $date=date('Y-m-d');
        $time = date('H:i:s');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_frequantation(CodeFrequantant, CodeSiege, CodeType, Status, Date, HeureArrive, CodeService) VALUES(:frequantant, :siege, :type, :status, :date, :heurearrive, :service)");
                $stmt->execute(['frequantant'=>$frequantant, 'siege'=>$siege, 'type'=>2, 'status'=>1, 'date'=>$date, 'heurearrive'=>$time, 'service'=>$service]);
				$_SESSION['success'] = 'Bien enregistré';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../accesCyber.php');

?>
