<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['update3'])){
        $newmaclan = $_POST['newmaclan'];
        $newmacwifi = $_POST['newmacwifi'];
        $newcle = $_POST['newcle'];
        $ordi = $_POST['id'];
        $date=date('Y-m-d');
        $filename = $_FILES['newphoto']['name'];
        $conn = $pdo->open();

        if(!empty($filename)){
            move_uploaded_file($_FILES['newphoto']['tmp_name'], '../img/'.$filename);
            $stmt1 = $conn->prepare("UPDATE t_materiel SET Photo1=:photo, Modified_on=:today WHERE CodeMateriel=:ordi");
            $stmt1->execute(['photo'=>$filename, 'today'=>$date, 'ordi'=>$ordi]);
			$_SESSION['success'] = 'Photo modifiée'; 	
        }
        try{
            $stmt = $conn->prepare("UPDATE t_materiel SET MacLAN=:lan, MacWIFI=:wifi, NumeroCle=:cle, Modified_on=:today WHERE CodeMateriel=:ordi");
            $stmt->execute(['lan'=>$newmaclan, 'wifi'=>$newmacwifi, 'cle'=>$newcle, 'today'=>$date, 'ordi'=>$ordi]);
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

	header("location: ../detailOrdinateur.php?id=$ordi");

?>
