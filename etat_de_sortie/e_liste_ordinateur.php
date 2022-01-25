<?php
require('fpdf/fpdf.php');
include '../includes/sessionconnected.php';

class PDF extends FPDF
{
// En-tête
function Header()
{
    $this->Image('img/listeordi.jpg',2,7,300,50);
    $this->SetFont('Arial','B',15);
    $this->Ln(55);
}
function ordinateur($conn){
    $this->setFont('Times','B',10);
        $this->cell(20,10,'Marque',1,0,'L');
        $this->cell(30,10,'Modele',1,0,'L');
        $this->cell(20,10,'Etiquette',1,0,'L');
        $this->cell(15,10,'Etat',1,0,'L');
        $this->cell(20,10,'Adaptateur',1,0,'L');
        $this->cell(20,10,'Couleur',1,0,'L');
        $this->cell(20,10,'Clavier',1,0,'L');
        $this->cell(25,10,'Syst. Exp',1,0,'L');
        $this->cell(20,10,'Disque dur',1,0,'L');
        $this->cell(10,10,'RAM',1,0,'L');
        $this->cell(15,10,'Process.',1,0,'L');
        $this->cell(35,10,'Affectation',1,0,'L');
        $this->cell(35,10,'Observation',1,0,'L');

        $this->Ln();
    $this->setFont('Times','B',8);
    $service = $_SESSION['CodeService'];
    if($service==1)
    {
        $id = 1;
    }
    else if($service==2)
    {
        $id = 12;
    }
    $stmt=$conn->prepare("SELECT CodeMateriel, t_adaptateur.Etiquette as adapt, t_materiel.CodeCategorieMateriel, t_materiel.Observation, CapaciteRAM, NumeroCle, CapaciteProcesseur, MacWIFI, MacLAN, t_materiel.DateAcquisition, Photo1, t_materiel.Etiquette, t_marque_ordinateur.Valeur as Marque, t_couleur.Valeur as Couleur, t_modele.Valeur as Modele, t_garantie.Valeur as Garantie, t_etat_materiel.Valeur as Etat, t_type_clavier.Valeur as Clavier, t_affectation.Affectation as Affectation, t_os.Valeur as os, t_capacite_hdd.Valeur as hdd
    FROM t_materiel
    INNER JOIN t_marque_ordinateur
    ON t_materiel.CodeMarque=t_marque_ordinateur.CodeMarque
    INNER JOIN t_os
    ON t_materiel.CodeOS=t_os.CodeOS
    INNER JOIN t_modele
    ON t_materiel.CodeModele=t_modele.CodeModele
    INNER JOIN t_garantie
    ON t_materiel.CodeGarantie=t_garantie.CodeGarantie
    INNER JOIN t_etat_materiel
    ON t_materiel.CodeEtatMateriel=t_etat_materiel.CodeEtat
    INNER JOIN t_type_clavier
    ON t_materiel.CodeTypeClavier=t_type_clavier.CodeTypeClavier
    INNER JOIN t_affectation
    ON t_materiel.CodeAffectation=t_affectation.CodeAffectation
    INNER JOIN t_couleur
    ON t_materiel.CodeCouleur=t_couleur.CodeCouleur
    INNER JOIN t_capacite_hdd
    ON t_materiel.CodeCapaciteHDD=t_capacite_hdd.CodeCapaciteHDD
    LEFT JOIN t_adaptateur
    ON t_materiel.CodeAdaptateur=t_adaptateur.CodeAdaptateur
    WHERE t_materiel.CodeCategorieMateriel=? AND t_materiel.CodeService=?
    ORDER BY Etiquette
    ");
	$params=array($id, $service);
    $stmt->execute($params);
        
    while($data = $stmt->fetch(PDO::FETCH_OBJ))
    {
        $this->cell(20,10,$data->Marque,1,0,'L');
        $this->cell(30,10,$data->Modele,1,0,'L');
        $this->cell(20,10,$data->Etiquette,1,0,'L');
        $this->cell(15,10,$data->Etat,1,0,'L');
        $this->cell(20,10,$data->adapt,1,0,'L');
        $this->cell(20,10,$data->Couleur,1,0,'L');
        $this->cell(20,10,$data->Clavier,1,0,'L');
        $this->cell(25,10,$data->os,1,0,'L');
        $this->cell(20,10,$data->hdd,1,0,'L');
        $this->cell(10,10,$data->CapaciteRAM,1,0,'L');
        $this->cell(15,10,$data->CapaciteProcesseur,1,0,'L');
        $this->cell(35,10,$data->Affectation,1,0,'L');
        $this->cell(35,10,$data->Observation,1,0,'L');
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