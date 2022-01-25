<?php
require('fpdf/fpdf.php');
include '../includes/sessionconnected.php';

class PDF extends FPDF
{
// En-tête
function Header()
{
    $this->Image('img/adaptateurs.png',2,7,300,50);
    $this->SetFont('Arial','B',15);
    $this->Ln(55);
}
function ordinateur($conn){
    $this->setFont('Times','B',10);
        $this->cell(30,10,'Etiquette',1,0,'L');
        $this->cell(60,10,'Marque',1,0,'L');
        $this->cell(15,10,'Etat',1,0,'L');
        $this->cell(35,10,'Tension',1,0,'L');
        $this->cell(35,10,'Puissance',1,0,'L');
        $this->cell(50,10,'Affectation',1,0,'L');
        $this->cell(55,10,'Observation',1,0,'L');

        $this->Ln();
    $this->setFont('Times','B',8);
    $service = $_SESSION['CodeService'];
    $stmt=$conn->prepare("SELECT Etiquette, Observation,DateAcquisition,TensionAdaptateur,PuissanceAdaptateur, t_marque_adaptateur.Valeur as marque, t_affectation.Affectation as affectation, t_etat_materiel.Valeur as etat
    FROM t_adaptateur
    INNER JOIN t_etat_materiel
    ON t_adaptateur.CodeEtatMateriel=t_etat_materiel.CodeEtat
    INNER JOIN t_marque_adaptateur
    ON t_adaptateur.CodeMarqueAdaptateur=t_marque_adaptateur.CodeMarqueAdaptateur
    INNER JOIN t_affectation
    ON t_adaptateur.CodeAffectation=t_affectation.CodeAffectation
    WHERE t_adaptateur.CodeService=?
    ORDER BY Etiquette");
	$params=array($service);
    $stmt->execute($params);
        
    while($data = $stmt->fetch(PDO::FETCH_OBJ))
    {
        $this->cell(30,10,$data->Etiquette,1,0,'L');
        $this->cell(60,10,$data->marque,1,0,'L');
        $this->cell(15,10,$data->etat,1,0,'L');
        $this->cell(35,10,$data->TensionAdaptateur,1,0,'L');
        $this->cell(35,10,$data->PuissanceAdaptateur,1,0,'L');
        $this->cell(50,10,$data->affectation,1,0,'L');
        $this->cell(55,10,$data->Observation,1,0,'L');
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