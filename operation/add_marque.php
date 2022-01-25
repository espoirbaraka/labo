<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $id = $_POST['id'];
        $marque = $_POST['marqueadd'];
        $today=date('Y-m-d');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_marque_ordinateur(Valeur, Created_on, CodeCategorieMateriel) VALUES(:marque, :today, :categ)");
                $stmt->execute(['marque'=>$marque, 'today'=>$today, 'categ'=>$id]);
				$_SESSION['success'] = 'Marque ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../marque.php?id='.$id.'');

?>
