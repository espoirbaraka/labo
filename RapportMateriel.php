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
        Rapports materiels
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Rapports materiels</li>
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
            <div class="box-body">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Telecharger</th>
                  <th>Concerne</th>
                </thead>
                <tbody>
                <tr>
                  <td><a href='etat_de_sortie/e_liste_ordinateur.php' target='u_blank' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-download'></i> Telecharger</a></td>
                  <td>Ordinateur</td>             
                </tr>
                <tr>
                  <td><a href='etat_de_sortie/e_liste_adaptateur.php' target='u_blank' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-download'></i> Telecharger</a></td>
                  <td>Adaptateur</td>             
                </tr>
                <tr>
                  <td><a href='' target='u_blank' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-download'></i> Telecharger</a></td>
                  <td>Switch</td>             
                </tr>
                <tr>
                  <td><a href='' target='u_blank' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-download'></i> Telecharger</a></td>
                  <td>Rallonge</td>             
                </tr>
                <tr>
                  <td><a href='' target='u_blank' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-download'></i> Telecharger</a></td>
                  <td>Acces point</td>             
                </tr>
                <tr>
                  <td><a href='' target='u_blank' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-download'></i> Telecharger</a></td>
                  <td>Routeur</td>             
                </tr>
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
