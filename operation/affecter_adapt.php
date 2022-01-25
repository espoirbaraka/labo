<?php
	include '../includes/sessionconnected.php';

		
	if(isset($_POST['add'])){
		$code = $_POST['id'];
		$adapt = $_POST['adapt'];
        $today = date('Y-m-d');
		$conn = $pdo->open();
 
		$adaptat=$conn->prepare("SELECT * FROM t_materiel WHERE CodeAdaptateur = :adapt");
		$adaptat->execute(['adapt'=>$adapt]);
		$adaptexist = $adaptat->rowCount();
		if($adaptexist == 0){
            try{
                $stmt = $conn->prepare("UPDATE t_materiel SET CodeAdaptateur = :adapt, Modified_on = :today  WHERE CodeMateriel = :ordi");
                $stmt->execute(['adapt'=>$adapt, 'today'=>$today, 'ordi'=>$code]);
				$_SESSION['success'] = 'Adaptateur affecté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		}
		else{
			$_SESSION['error'] = 'Attention, cette adaptateur est branchée sur un autre ordinateur, veuillez tout d\'abord le debrancher';
		}
		

		$pdo->close();
	}
	elseif(isset($_POST['remove'])){
		$code = $_POST['id'];
		$adapt = $_POST['adapt'];
        $today = date('Y-m-d');
		$conn = $pdo->open();
 
            try{
                $stmt = $conn->prepare("UPDATE t_materiel SET CodeAdaptateur= null WHERE CodeMateriel = :ordi");
                $stmt->execute(['ordi'=>$code]);
				$_SESSION['success'] = 'Adaptateur Debranché';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}


	header('location: ../ordinateur.php');

?>
