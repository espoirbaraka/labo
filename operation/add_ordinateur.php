<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
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
		$utilisateur = $_POST['user'];
        $cle = $_POST['cle'];
        $observation = $_POST['observation'];
		$service = $_SESSION['CodeService'];
		if($service==1)
		{
			$categoriemateriel = 1;
		}
		else if($service==2){
			$categoriemateriel = 12;
		}
        $today = date('Y-m-d');
        $user = $_SESSION['CodeUser'];

		$conn = $pdo->open();

		$ordi = $conn->prepare("SELECT * FROM t_materiel WHERE Etiquette = :etiquette AND CodeService=:service");
		$ordi->execute(['etiquette'=>$etiquette, 'service'=>$service]);
		$ordiexist = $ordi->rowCount();
		if($ordiexist == 0)
		{

			$filename1 = $_FILES['photo1']['name'];
            $filename2 = $_FILES['photo2']['name'];
            $filename3 = $_FILES['photo3']['name'];
			$date = date('Y-m-d');
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
				$stmt = $conn->prepare("INSERT INTO t_materiel(CodeCategorieMateriel, User, CapaciteProcesseur, CapaciteRAM, CodeAffectation, CodeCapaciteHDD, CodeCouleur, CodeEtatMateriel, CodeFournisseur, CodeGarantie, CodeMarque, CodeMarqueCadenat, CodeModele, CodeNombreHDD, CodeOS, CodeTailleEcran, CodeTensionBatterie, CodeTypeClavier, CodeTypeHDD, CodeTypeOrdinateur, CodeTypePortProjecteur, CodeTypeRAM, Code_User_created, Created_on, DateAcquisition, Etiquette, NombreCoeurProcesseur, NumeroCle, Observation,Photo1, Photo2,Photo3,CodeService) 
                                        VALUES (:codemateriel, :utilisateur, :capaciteprocesseur, :capaciteram, :affectation, :capacitehdd, :couleur, :etat, :fournisseur, :garantie, :marque, :marquecadenat, :modele, :nombrehdd, :os, :tailleecran, :tensionbatterie, :typeclavier, :typehdd, :typeordinateur, :typeprojecteur, :typeram, :user, :created_on, :dateacquisition, :etiquette, :nombrecoeur, :numerocle, :observation, :photo1, :photo2, :photo3,:service)");
				$stmt->execute(['codemateriel'=>$categoriemateriel, 'utilisateur'=>$utilisateur, 'capaciteprocesseur'=>$capaciteprocesseur, 'capaciteram'=>$capaciteram, 'affectation'=>$affectation, 'capacitehdd'=>$capacitehdd, 'couleur'=>$couleur, 'etat'=>$etat, 'fournisseur'=>$fournisseur, 'garantie'=>$garantie, 'marque'=>$marque, 'marquecadenat'=>$typecadenat, 'modele'=>$modele, 'nombrehdd'=>$nombrehdd, 'os'=>$systeme, 'tailleecran'=>$tailleecran, 'tensionbatterie'=>$tensionbatterie, 'typeclavier'=>$typeclavier, 'typehdd'=>$typehdd, 'typeordinateur'=>$typeordinateur, 'typeprojecteur'=>$typeport, 'typeram'=>$typeram, 'user'=>$user, 'created_on'=>$today, 'dateacquisition'=>$dateacquisition, 'etiquette'=>$etiquette, 'nombrecoeur'=>$nombrecoeur, 'numerocle'=>$cle, 'observation'=>$observation, 'photo1'=>$filename1, 'photo2'=>$filename2, 'photo3'=>$filename3, 'service'=>$service]);
				$_SESSION['success'] = 'Materiel ajouté';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		}
		else{
			$_SESSION['error'] = 'NON ENREGISTE, Car un autre ordinateur possede la meme etiquette';
		}

            
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../ordinateur.php');

?>
