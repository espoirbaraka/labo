<?php
require('fpdf/fpdf.php');
include '../includes/sessionconnected.php';

class PDF extends FPDF
{
// En-tête
// function Header()
// {
//     $this->Image('img/fr.png',2,7,300,50);
//     $this->SetFont('Arial','B',15);
//     $this->Ln(55);
// }
function ordinateur($conn){
    $this->setFont('Times','B',10);
        
    
    $service = $_SESSION['CodeService'];
    $id = $_GET['type'];
    $date1 = $_GET['date1'];
    $date2 = $_GET['date2'];
    $stmt=$conn->prepare("SELECT CodeFrequantation, Date, Status, HeureArrive, HeureDepart, t_frequantant.Nom as nom, t_frequantant.Postnom as postnom, t_frequantant.Prenom as prenom, t_frequantant.Matricule as matricule, t_materiel.CodeMateriel, t_materiel.Etiquette as etiquette, t_marque_ordinateur.Valeur as marque FROM t_frequantation
    INNER JOIN t_frequantant
    ON t_frequantation.CodeFrequantant=t_frequantant.CodeFrequantant
    INNER JOIN t_materiel
    ON t_frequantation.CodeMateriel=t_materiel.CodeMateriel
    INNER JOIN t_marque_ordinateur
    ON t_materiel.CodeMarque=t_marque_ordinateur.CodeMarque
    WHERE t_frequantation.CodeService=? AND Date BETWEEN CAST(? AS DATE) AND CAST(? AS DATE)
    ORDER BY Date
    ");
	$params=array($service, $date1, $date2);
    $stmt->execute($params);



    $stmt2=$conn->prepare("SELECT COUNT(CodeFrequantation) as nombre FROM t_frequantation
    INNER JOIN t_frequantant
    ON t_frequantation.CodeFrequantant=t_frequantant.CodeFrequantant
    INNER JOIN t_materiel
    ON t_frequantation.CodeMateriel=t_materiel.CodeMateriel
    INNER JOIN t_marque_ordinateur
    ON t_materiel.CodeMarque=t_marque_ordinateur.CodeMarque
    WHERE t_frequantation.CodeService=? AND Date BETWEEN CAST(? AS DATE) AND CAST(? AS DATE)
    ORDER BY Date
    ");
	$params=array($service, $date1, $date2);
    $stmt2->execute($params);
    $nombre=$stmt2->fetch(PDO::FETCH_OBJ);
    $this->setFont('Times','B',12);
    $this->cell(95,10,'FREQUANTATION DES ETUDIANTS AU LABO',1,0,'L');
    $this->Ln(); 
    $this->cell(95,10,'INTERVALLE : Du '.$date1.' au '.$date2,1,0,'L'); 
    $this->Ln();
    $this->cell(95,10,'NOMBRE DES FREQUANTANTS: '.$nombre->nombre,1,0,'L'); 
    $this->Ln();
    $this->setFont('Times','B',10);
    $this->cell(35,10,'Date',1,0,'L');
    $this->cell(30,10,'Heure d\'arrive',1,0,'L');
    $this->cell(30,10,'Heure de depart',1,0,'L');
    $this->cell(85,10,'Etudiant',1,0,'L');
    $this->cell(50,10,'Materiel',1,0,'L');
    $this->cell(30,10,'Etiquette',1,0,'L');
    $this->Ln();
    while($data = $stmt->fetch(PDO::FETCH_OBJ))
    {
        $this->setFont('Times','B',8);
        $this->cell(35,10,$data->Date,1,0,'L');
        $this->cell(30,10,$data->HeureArrive,1,0,'L');
        $this->cell(30,10,$data->HeureDepart,1,0,'L');
        $this->cell(85,10,$data->nom.' '.$data->postnom.' '.$data->prenom,1,0,'L');
        $this->cell(50,10,'Ordinateur',1,0,'L');
        $this->cell(30,10,$data->etiquette,1,0,'L');
        $this->Ln();
    }
}
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',12);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}

    // Instanciation de la classe dérivée
    $pdf = new PDF('L','mm','A4');
    $pdf->SetFont('Arial','B',14);
    $pdf->AddPage();
    $pdf->ordinateur($conn);
    //$pdf->Cell(0,10,'Fait a Goma le '.date('d-m-Y').', BARAKA BIGEGA ESPOIR, Responsable du LABORATOIRE INFO 1 de l\'ISIG',0,1);
    $pdf->Output();
?>