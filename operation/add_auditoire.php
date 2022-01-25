<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $promotion = $_POST['promotion'];
        $option = $_POST['option'];
        $date=date('Y-m-d');
        $time = date('H:i:s');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_auditoire(CodeOption, CodePromotion, Created_on) VALUES(:option, :promotion, :date)");
                $stmt->execute(['option'=>$option, 'promotion'=>$promotion, 'date'=>$date]);
				$_SESSION['success'] = 'Auditoire ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../frequantantPromotion.php');

?>
