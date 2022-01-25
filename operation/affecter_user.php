<?php
	include '../includes/sessionconnected.php';

		
	if(isset($_POST['add'])){
		$code = $_POST['id'];
		$username = $_POST['utilisateur_update'];
        $today = date('Y-m-d');
		$conn = $pdo->open();
 
            try{
                $stmt = $conn->prepare("UPDATE t_materiel SET User = :username, Modified_on = :today  WHERE CodeMateriel = :ordi");
                $stmt->execute(['username'=>$username, 'today'=>$today, 'ordi'=>$code]);
				$_SESSION['success'] = 'Nom d\'utilisateur modifié';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		

		$pdo->close();
	}

	header('location: ../ordinateur.php');

?>
