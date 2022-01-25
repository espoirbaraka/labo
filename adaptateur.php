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
        Adaptateurs
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Adaptateurs</li>
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
              <a href="#addadaptateur" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
            </div>
            <div class="box-body">
              <div style="overflow: auto;">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Marque</th>
                  <th>Etiquette</th>
                  <th>Etat</th>
                  <th>Puissance</th>
                  <th>Tension</th>
                  <th>Affectation</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT CodeAdaptateur, Etiquette, t_etat_materiel.Valeur as etat, DateAcquisition, TensionAdaptateur, PuissanceAdaptateur, t_marque_adaptateur.Valeur as marque, t_affectation.Affectation as affectation
                                                FROM t_adaptateur
                                                INNER JOIN t_affectation
                                                ON t_adaptateur.CodeAffectation=t_affectation.CodeAffectation
                                                INNER JOIN t_etat_materiel
                                                ON t_adaptateur.CodeEtatMateriel=t_etat_materiel.CodeEtat
                                                INNER JOIN t_marque_adaptateur
                                                ON t_adaptateur.CodeMarqueAdaptateur=t_marque_adaptateur.CodeMarqueAdaptateur
                                                WHERE CodeService=?
                                                ORDER BY Etiquette");
                      $stmt->execute(array($service));
                      foreach($stmt as $adaptateur){
                       
                        echo "
                          <tr>
                            <td>".$adaptateur['marque']."</td>
                            <td>".$adaptateur['Etiquette']."</td>
                            <td>".$adaptateur['etat']."</td>
                            <td>".$adaptateur['PuissanceAdaptateur']."</td>
                            <td>".$adaptateur['TensionAdaptateur']."</td>
                            <td>".$adaptateur['affectation']."</td>
                            <td><a href='detailAdaptateur.php?id=".$adaptateur['CodeAdaptateur']."' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-edit'></i> Edit</a>
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
    <?php include 'modal/adaptateur.php'; ?>
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


$(document).on('click', '.etat', function(e){
  e.preventDefault();
  $('#etatmodif').modal('show');
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
