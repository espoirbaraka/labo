<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $siege = $_POST['siege'];
        $detail = $_POST['detail'];

		$conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM t_siege WHERE EtiquetteSiege = ? AND CodeService=?");
        $stmt->execute(array($siege, $service));
		$siegeexist = $stmt->rowCount();

		if($siegeexist > 0){
			$_SESSION['error'] = 'Ce siege existe déjà';
		}else{
            try{
                $stmt = $conn->prepare("INSERT INTO t_siege(EtiquetteSiege, Detail, CodeService) VALUES(:siege, :detail, :service)");
                $stmt->execute(['siege'=>$siege, 'detail'=>$detail, 'service'=>$service]);
				$_SESSION['success'] = 'Service ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
        }
			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../siege.php');

?>
