<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update'])){
        $code = $_POST['id'];
		$marque = $_POST['marque'];
		$modele = $_POST['modele'];
		$couleur = $_POST['couleur'];
		$garantie = $_POST['garantie'];
		$etat = $_POST['etat'];
        $typehdd = $_POST['typehdd'];
        $nombrehdd = $_POST['nombrehdd'];
		$capacitehdd = $_POST['capacitehdd'];
		$typeordinateur = $_POST['typeordinateur'];
		$typeclavier = $_POST['typeclavier'];
		$systeme = $_POST['systeme'];
        $tailleecran = $_POST['tailleecran'];
        $typeport = $_POST['typeport'];
		$tensionbatterie = $_POST['tensionbatterie'];
		$typecadenat = $_POST['typecadenat'];
		$affectation = $_POST['affectation'];
		$fournisseur = $_POST['fournisseur'];
        $typeram = $_POST['typeram'];
        $capaciteram = $_POST['capaciteram'];
        $capaciteprocesseur = $_POST['capaciteprocesseur'];
        $nombrecoeur = $_POST['nombrecoeur'];
        $typeport = $_POST['typeport'];
        $dateacquisition = $_POST['dateacquisition'];
        $etiquette = $_POST['etiquette'];
        $cle = $_POST['cle'];
        $observation = $_POST['observation'];
        $today = date('Y-m-d');
        $user = $_SESSION['CodeUser'];

		$conn = $pdo->open();

        $filename1 = $_FILES['photo1']['name'];
        $filename2 = $_FILES['photo2']['name'];
        $filename3 = $_FILES['photo3']['name'];
			if(!empty($filename1)){
                move_uploaded_file($_FILES['photo1']['tmp_name'], '../img/'.$filename1);
                if(!empty($filename2)){
                    move_uploaded_file($_FILES['photo2']['tmp_name'], '../img/'.$filename2);
                    if(!empty($filename3)){
                        move_uploaded_file($_FILES['photo3']['tmp_name'], '../img/'.$filename3);	
                    }	
                }	
			}
		try{
			$stmt = $conn->prepare("UPDATE t_materiel SET CapaciteRAM=:capaciteram, CodeAffectation=:affectation, CodeCapaciteHDD=:capacitehdd, CodeEtatMateriel=:etat, CodeMarqueCadenat=:marquecadenat, CodeNombreHDD=:nombrehdd, CodeOS=:os, CodeTensionBatterie=:tensionbatterie, Modified_on=:modified_on, Etiquette=:etiquette, NumeroCle=:numerocle, Observation=:observation, Photo1=:photo1, Photo2=:photo2, Photo3=:photo3 WHERE CodeMateriel=:code");
			$stmt->execute(['capaciteram'=>$capaciteram, 'affectation'=>$affectation, 'capacitehdd'=>$capacitehdd, 'etat'=>$etat, 'marquecadenat'=>$typecadenat, 'nombrehdd'=>$nombrehdd, 'os'=>$systeme, 'tensionbatterie'=>$tensionbatterie, 'modified_on'=>$today, 'etiquette'=>$etiquette, 'numerocle'=>$cle, 'observation'=>$observation, 'photo1'=>$filename1, 'photo2'=>$filename2, 'photo3'=>$filename3, 'code'=>$code]);
			$_SESSION['success'] = 'Ordinateur modifié avec succès';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Complétez le formulaire de modification de l\'ordinateur';
	}

	header('location: ../ordinateur.php');

?>
