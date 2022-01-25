<?php 
	include '../includes/sessionconnected.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, t_promotion.Valeur as promotion, t_option.Valeur as option 
                                FROM t_auditoire 
                                INNER JOIN t_option
                                ON t_auditoire.CodeOption=t_option.CodeOption
                                INNER JOIN t_promotion
                                ON t_auditoire.CodePromotion=t_promotion.CodePromotion
                                WHERE CodeAuditoire=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>