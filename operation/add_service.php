<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $service = $_POST['service'];
        $abbrev = $_POST['abbrev'];
        $chef = $_POST['chef'];

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_service(Service, Abbrev, ResponsableService) VALUES(:service, :abbrev, :chef)");
                $stmt->execute(['service'=>$service, 'abbrev'=>$abbrev, 'chef'=>$chef]);
				$_SESSION['success'] = 'Service ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire';
	}

	header('location: ../service.php');

?>
