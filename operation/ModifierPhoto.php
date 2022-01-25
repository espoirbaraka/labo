<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['modifier'])){
        $id = $_POST['id'];
        $today = date('Y-m-d');

		$conn = $pdo->open();
        
        $filename = $_FILES['photo']['name'];
			if(!empty($filename)){
                move_uploaded_file($_FILES['photo']['tmp_name'], '../img/'.$filename); 	
			}
            try{
                $stmt = $conn->prepare("UPDATE t_materiel set Photo1=:photo, Modified_on=:today WHERE CodeMateriel=:id");
                $stmt->execute(['photo'=>$filename, 'today'=>$today, 'id'=>$id]);
				$_SESSION['success'] = 'Photo modifiée avec succès';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header("location: ../detailOrdinateur.php");

?>
