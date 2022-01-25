<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update'])){
        $service = $_POST['edit_service'];
        $chef = $_POST['edit_chef'];
        $abbrev = $_POST['edit_abbrev'];
        $id = $_POST['id2'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("UPDATE t_service SET Service=:service, Abbrev=:abbrev, ResponsableService=:chef WHERE CodeService=:code");
                $stmt->execute(['service'=>$service, 'abbrev'=>$abbrev, 'chef'=>$chef, 'code'=>$id]);
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

	header("location: ../service.php");

?>
