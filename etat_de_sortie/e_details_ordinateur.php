<?php
require('fpdf/fpdf.php');
include '../includes/sessionconnected.php';

class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('img/materiel.jpg',2,7,206,50);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(30);
    // Titre
    // $this->Cell(180,10,'Titre',1,0,'C');
    // Saut de ligne
    $this->Ln(55);
}

// Tableau simple
function BasicTable($header, $data)
{
    // En-tête
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Données
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}







function headerTable(){
    $this->setFont('Times','B',12);
    $this->cell(90,10,'Signature du comptable',1,0,'C');
    $this->cell(90,10,'Signature du travailleur',1,0,'C');
    $this->Ln();
}


function ordinateur($conn){
    $this->setFont('Times','B',12);
    $id=$_GET['id'];
    $stmt=$conn->prepare("SELECT CodeMateriel, DateAcquisition, NumeroCle, Photo1, t_categorie_materiel.Designation as categoriemateriel, CapaciteProcesseur, t_type_ordinateur.Valeur as typeordi, CapaciteRAM, Observation, Photo1, Etiquette, t_marque_ordinateur.Valeur as Marque, t_couleur.Valeur as Couleur, t_modele.Valeur as Modele, t_garantie.Valeur as Garantie, t_etat_materiel.Valeur as Etat, t_type_clavier.Valeur as Clavier, t_affectation.Affectation as Affectation,
    t_capacite_hdd.Valeur as capacitehdd, t_fournisseur.NomFournisseur as fournisseur, t_marque_cadenat.Valeur as marquecadenat, t_nombre_hdd.Valeur as nombrehdd, t_os.Valeur as os, t_taille_ecran.Valeur as tailleecran, t_tension_batterie.Value as TensionBatterie, t_type_hdd.Valeur as typehdd, t_type_port_projecteur.Valeur as typeprojecteur, t_type_ram.Valeur typeram
                                FROM t_materiel
                                INNER JOIN t_marque_ordinateur
                                ON t_materiel.CodeMarque=t_marque_ordinateur.CodeMarque
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
                                INNER JOIN t_type_ordinateur
                                ON t_materiel.CodeTypeOrdinateur=t_type_ordinateur.CodeTypeOrdinateur
                                INNER JOIN t_categorie_materiel
                                ON t_materiel.CodeCategorieMateriel=t_categorie_materiel.CodeCategorie
                                INNER JOIN t_capacite_hdd
                                ON t_materiel.CodeCapaciteHDD=t_capacite_hdd.CodeCapaciteHDD
                                INNER JOIN t_fournisseur
                                ON t_materiel.CodeFournisseur=t_fournisseur.CodeFournisseur
                                INNER JOIN t_marque_cadenat
                                ON t_materiel.CodeMarqueCadenat=t_marque_cadenat.CodeMarqueCadenat
                                INNER JOIN t_nombre_hdd
                                ON t_materiel.CodeNombreHDD=t_nombre_hdd.CodeNombreHDD
                                INNER JOIN t_os
                                ON t_materiel.CodeOS=t_os.CodeOS
                                INNER JOIN t_taille_ecran
                                ON t_materiel.CodeTailleEcran=t_taille_ecran.CodeTailleEcran
                                INNER JOIN t_tension_batterie
                                ON t_materiel.CodeTensionBatterie=t_tension_batterie.CodeTensionBatterie
                                INNER JOIN t_type_hdd
                                ON t_materiel.CodeTypeHDD=t_type_hdd.CodeTypeHDD
                                INNER JOIN t_type_port_projecteur
                                ON t_materiel.CodeTypePortProjecteur=t_type_port_projecteur.CodeTypePortProjecteur
                                INNER JOIN t_type_ram
                                ON t_materiel.CodeTypeRAM=t_type_ram.CodeTypeRAM
                                WHERE CodeMateriel=?
                                ORDER BY Marque");
	$params=array($id);
	$stmt->execute($params);
    while($data = $stmt->fetch(PDO::FETCH_OBJ))
    {
        $this->cell(60,10,'Categorie:',1,0,'L');
        $this->cell(120,10,$data->categoriemateriel,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Materiel:',1,0,'L');
        $this->cell(120,10,$data->Marque.' '.$data->Modele,1,0,'L');
        $this->Ln();
        
        $this->cell(60,10,'Etiquette:',1,0,'L');
        $this->cell(120,10,$data->Etiquette,1,0,'L');
        $this->Ln();
        
        $this->cell(60,10,'Etat du materiel:',1,0,'L');
        $this->cell(120,10,$data->Etat,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Type:',1,0,'L');
        $this->cell(120,10,$data->typeordi,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Couleur:',1,0,'L');
        $this->cell(120,10,$data->Couleur,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'RAM:',1,0,'L');
        $this->cell(120,10,$data->typeram.' de '.$data->CapaciteRAM.' Go',1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Capacite processeur:',1,0,'L');
        $this->cell(120,10,$data->CapaciteProcesseur,1,0,'L');
        $this->Ln();


        $this->cell(60,10,'Garantie:',1,0,'L');
        $this->cell(120,10,$data->Garantie.' ans',1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Affectation:',1,0,'L');
        $this->cell(120,10,$data->Affectation,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Capacite du disque dur:',1,0,'L');
        $this->cell(120,10,$data->capacitehdd,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Date Acquisition:',1,0,'L');
        $this->cell(120,10,$data->DateAcquisition,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Fournisseur:',1,0,'L');
        $this->cell(120,10,$data->fournisseur,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Cadenat:',1,0,'L');
        $this->cell(120,10,$data->marquecadenat.' numero '.$data->NumeroCle,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Operating system:',1,0,'L');
        $this->cell(120,10,$data->os,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Taille ecran:',1,0,'L');
        $this->cell(120,10,$data->tailleecran,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Tension Batterie:',1,0,'L');
        $this->cell(120,10,$data->TensionBatterie,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Type de disque dur:',1,0,'L');
        $this->cell(120,10,$data->typehdd,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Type des ports pour projecteur:',1,0,'L');
        $this->cell(120,10,$data->typeprojecteur,1,0,'L');
        $this->Ln();

        $this->cell(60,10,'Observation:',1,0,'L');
        $this->cell(120,10,$data->Observation,1,0,'L');
        $this->Ln();
    }
}


function viewTable($bdd){
    $this->setFont('Times','B',12);
}







}

    // Instanciation de la classe dérivée
    $pdf = new PDF('P','mm','A4');
    // Format pour carte
    // $pdf = new PDF('L','mm',array(100,150));
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',14);
    $pdf->AddPage();
    $pdf->ordinateur($conn);
    $pdf->Cell(0,10,'Fait a Goma le '.date('d-m-Y'),0,1);
    $pdf->Output();
?>