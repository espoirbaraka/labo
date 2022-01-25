<?php
	include '../../includes/sessionconnected.php';

	if(isset($_POST['add1'])){
		$marque = $_POST['marque'];
        $today = date('Y-m-d');

		$conn = $pdo->open();
 
            try{
                $stmt = $conn->prepare("INSERT INTO t_marque_ordinateur(Valeur, Created_on) VALUES(:marque, :today)");
                $stmt->execute(['marque'=>$marque, 'today'=>$today]);
				$_SESSION['success'] = 'Marque ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire';
	}

	header('location: ../../setting.php');

?>
