<?php 
  include 'includes/sessionconnected.php';
  include 'includes/format.php'; 
?>
<?php 
  // $today = date('Y-m-d');
  // $year = date('Y');
  // if(isset($_GET['year'])){
  //   $year = $_GET['year'];
  // }

  $conn = $pdo->open();
  $id = $_GET['id'];
  $marque =$conn->prepare('SELECT * FROM t_categorie_materiel WHERE CodeCategorie=?');
  $marque->execute(array($id));
  $lamarque=$marque->fetch();
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nos <?php echo $lamarque['Designation']; ?>s
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Nos </li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
    <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Erreur!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Succès!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <!-- debut tableau -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addordinateur" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
            </div>
            <div class="box-body">
            
              <div style="overflow: auto;">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Image</th>
                  <th>Marque</th>
                  <th>Etiquette</th>
                  <th>Etat</th>
                  <th>Adaptateur</th>
                  <th>Affectation</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
                    try{
                      $stmt = $conn->prepare("SELECT CodeMateriel, t_materiel.Observation, User, NumeroCle as Cle, Photo1, t_materiel.Etiquette, t_marque_ordinateur.Valeur as Marque, t_couleur.Valeur as Couleur, t_modele.Valeur as Modele, t_garantie.Valeur as Garantie, t_etat_materiel.Valeur as Etat, t_type_clavier.Valeur as Clavier, t_affectation.Affectation as Affectation, t_adaptateur.Etiquette as adapt
                      FROM t_materiel
                      INNER JOIN t_marque_ordinateur
                      ON t_materiel.CodeMarque=t_marque_ordinateur.CodeMarque
                      INNER JOIN t_modele
                      ON t_materiel.CodeModele=t_modele.CodeModele
                      LEFT JOIN t_adaptateur
                      ON t_materiel.CodeAdaptateur=t_adaptateur.CodeAdaptateur
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
                      WHERE t_materiel.CodeService=? AND t_materiel.CodeCategorieMateriel=?
                      ORDER BY t_materiel.Etiquette");
                      $stmt->execute(array($service, $id));
                      foreach($stmt as $ordinateur){
                       
                        $ordi = $ordinateur['Marque'].' '.$ordinateur['Modele'];
                        $image = (!empty($ordinateur['Photo1'])) ? 'img/'.$ordinateur['Photo1'] : 'img/laptop.png';
                        echo "
                          <tr>
                            <td>
                              <img src='".$image."' height='30px' width='30px'>
                            </td>
                            <td>".$ordi."</td>
                            <td>".$ordinateur['Etiquette']."</td>
                            <td>".$ordinateur['Etat']."</td>
                            <td>".$ordinateur['adapt']."
                            <span class='pull-right'><i class='fa fa-edit adapt' data-id='".$ordinateur['CodeMateriel']."'></i></span>
                            </td>
                            <td>".$ordinateur['Affectation']."</td>
                            <td>
                            <a href='detailOrdinateur.php?id=".$ordinateur['CodeMateriel']."' class='btn btn-success btn-sm btn-flat'><i class='fa fa-edit'></i> View</a>
                              <a href='etat_de_sortie/e_details_ordinateur.php?id=".$ordinateur['CodeMateriel']."' target='u_blank' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-print'></i>   </a>

                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'modal/ordinateur.php'; ?>
</div>
<!-- ./wrapper -->

<!-- Chart Data -->
<?php

?>

<?php 
?>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

$(document).on('click', '.edit', function(e){
  e.preventDefault();
  $('#edit').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

$(document).on('click', '.adapt', function(e){
  e.preventDefault();
  $('#affecter_adaptateur').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

$(document).on('click', '.utilisateur', function(e){
  e.preventDefault();
  $('#affecter_utilisateur').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

});

function getRow(id){
$.ajax({
  type: 'POST',
  url: 'operation/ordinateur_row.php',
  data: {id:id},
  dataType: 'json',
  success: function(response){
    $('.ordinateur').val(response.CodeMateriel);
    $('.adaptateur').val(response.CodeMateriel);
    $('.user').val(response.CodeMateriel);
    $('#etiquettemodif').val(response.Etiquette);
   }
});
}
</script>
</body>
</html>
