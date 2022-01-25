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
        Point d'accès
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Point d'accès</li>
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
              <a href="#addacces" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
            </div>
            <div class="box-body">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Marque</th>
                  <th>Etiquette</th>
                  <th>Couleur</th>
                  <th>Etat</th>
                  <th>Date Acquisition</th>
                  <th>Affectation</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT Etiquette, t_marque_accesspoint.Value as marque, t_etat_materiel.Valeur as etat, t_couleur.Valeur as couleur, t_affectation.Affectation as affectation, DateAcquisition
                      FROM t_materiel
                      INNER JOIN t_affectation
                      ON t_materiel.CodeAffectation=t_affectation.CodeAffectation
                      INNER JOIN t_etat_materiel
                      ON t_materiel.CodeEtatMateriel=t_etat_materiel.CodeEtat
                      INNER JOIN t_marque_accesspoint
                      ON t_materiel.CodeMarqueAccessPoint=t_marque_accesspoint.CodeMarqueAccessPoint
                      INNER JOIN t_couleur
                      ON t_materiel.CodeCouleur=t_couleur.CodeCouleur
                      WHERE CodeCategorieMateriel=4");
                      $stmt->execute();
                      foreach($stmt as $acces){
                       
                        echo "
                          <tr>
                            <td>".$acces['marque']."</td>
                            <td>".$acces['Etiquette']."</td>
                            <td>".$acces['couleur']."</td>
                            <td>".$acces['etat']."</td>
                            <td>".$acces['DateAcquisition']."</td>
                            <td>".$acces['affectation']."</td>
                            
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

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'modal/acces_point.php'; ?>
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

$(document).on('click', '.delete', function(e){
  e.preventDefault();
  $('#deleteadapt').modal('show');
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
    $('#etiquettemodif').val(response.Etiquette);
   }
});
}
</script>
</body>
</html>
