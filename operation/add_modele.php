<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
        $marque = $_POST['id'];
        $modele = $_POST['modele'];
        $today=date('Y-m-d');

		$conn = $pdo->open();

			try{
                $stmt = $conn->prepare("INSERT INTO t_modele(Valeur, Created_on, CodeCategorieMateriel) VALUES(:modele, :today, :marque)");
                $stmt->execute(['modele'=>$modele, 'today'=>$today, 'marque'=>$marque]);
				$_SESSION['success'] = 'Modele ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../modele.php?id='.$marque.'');

?>
