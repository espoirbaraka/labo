<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
		$postnom = $_POST['postnom'];
		$prenom = $_POST['prenom'];
		$promotion = $_POST['promotion'];
		$matricule = $_POST['matricule'];
        $option = $_POST['option'];

		$conn = $pdo->open();

		$etudiant = $conn->prepare("SELECT * FROM t_frequantant WHERE Matricule = :matricule");
		$etudiant->execute(['matricule'=>$matricule]);
		$etudiantexist = $etudiant->rowCount();
		if($etudiantexist == 0)
		{

			try{
                $stmt = $conn->prepare("INSERT INTO t_frequantant(CodeCategorieFrequantant, Nom, Postnom, Prenom, Matricule, CodeOption, CodePromotion) VALUES(:categorie, :nom, :postnom, :prenom, :matricule, :option, :promotion)");
                $stmt->execute(['categorie'=>1, 'nom'=>$nom, 'postnom'=>$postnom, 'prenom'=>$prenom, 'matricule'=>$matricule, 'option'=>$option, 'promotion'=>$promotion]);
				$_SESSION['success'] = 'Etudiant ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else
		{
			$_SESSION['error'] = 'NON ENREGISTRE. Etudiant existant';
		}



			
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../frequantantEtudiant.php');

?>
