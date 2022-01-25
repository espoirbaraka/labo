<?php
	include '../includes/sessionconnected.php';

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
        $postnom = $_POST['postnom'];
        $mail = $_POST['mail'];
        $password = sha1($_POST['password']);
        $username = $_POST['username'];
        $prenom = $_POST['prenom'];
        $service = $_POST['service'];
        $today = date('Y-m-d');
		$conn = $pdo->open();
        $filename = $_FILES['photo']['name'];
		
                if(!empty($filename)){
                    move_uploaded_file($_FILES['photo']['tmp_name'], '../img/'.$filename);	
			    }
                try{
                    $stmt = $conn->prepare("INSERT INTO t_user(Nom, Postnom, Prenom, Email, Password, Photo, Created_on, CodeService, Username, Status) VALUES(:nom, :postnom, :prenom, :email, :password, :photo, :created_on, :service, :username, :status)");
                    $stmt->execute(['nom'=>$nom, 'postnom'=>$postnom, 'prenom'=>$prenom, 'email'=>$mail, 'password'=>$password, 'photo'=>$filename, 'created_on'=>$today, 'service'=>$service, 'username'=>$username, 'status'=>1]);
                    $_SESSION['success'] = 'Utilisateur ajouté';
    
                }
                catch(PDOException $e){
                    $_SESSION['error'] = $e->getMessage();
                }
            
            

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Compléter le formulaire d\'ajout materiel';
	}

	header('location: ../user.php');

?>
