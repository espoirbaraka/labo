<?php 
	include '../includes/sessionconnected.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT CodeFrequantation, HeureArrive, t_frequantant.Nom as nom, t_frequantant.Postnom as postnom, t_frequantant.Prenom as prenom FROM t_frequantation
        INNER JOIN t_frequantant
        ON t_frequantation.CodeFrequantant=t_frequantant.CodeFrequantant
        WHERE CodeFrequantation=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>