<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['remove'])){
        $id = $_POST['id'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("DELETE FROM t_service WHERE CodeService=:code");
                $stmt->execute(['code'=>$id]);
				$_SESSION['success'] = 'Service supprimé';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire';
	}

	header("location: ../service.php");

?>
