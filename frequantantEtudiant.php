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
        Etudiant frequantants
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Etudiant frequantants</li>
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
              <a href="#addfrequantant" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
            </div>
            <div class="box-body">
            <div style="overflow: auto;">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Nom</th>
                  <th>Postnom</th>
                  <th>Prenom</th>
                  <th>Matricule</th>
                  <th>Promotion</th>
                  <th>Dernière frequantation</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
                    
                      try{
                        $stmt = $conn->prepare("SELECT *, t_option.Code as option, t_promotion.Valeur as promotion
                                                FROM t_frequantant
                                                INNER JOIN t_option
                                                ON t_frequantant.CodeOption=t_option.CodeOption
                                                INNER JOIN t_promotion
                                                ON t_frequantant.CodePromotion=t_promotion.CodePromotion
                                                WHERE CodeCategorieFrequantant=1
                                                ORDER BY CodeFrequantant DESC
                                               ");
                        $stmt->execute();
                        foreach($stmt as $etudiant){
                          if($user['CodeService']==1 || $user['CodeService']==2)
                          {
                         echo "
                            <tr>
                              <td>".$etudiant['Nom']."</td>
                              <td>".$etudiant['Postnom']."</td>
                              <td>".$etudiant['Prenom']."</td>
                              <td>".$etudiant['Matricule']."</td>
                              <td>".$etudiant['promotion']." ".$etudiant['Code']."</td>
                              <td></td>
                              <td>
                                <button class='btn btn-success btn-sm equipem btn-flat' data-id='".$etudiant['CodeFrequantant']."'><i class='fa fa-edit'></i> Accès</button>
                                <button class='btn btn-primary btn-sm equipement btn-flat' data-id='".$etudiant['CodeFrequantant']."'><i class='fa fa-desktop'></i> Equipement</button>
                                
                              </td>
                            </tr>
                          ";
                          }elseif($user['CodeService']==3)
                          {
                            echo "
                            <tr>
                              <td>".$etudiant['Nom']."</td>
                              <td>".$etudiant['Postnom']."</td>
                              <td>".$etudiant['Prenom']."</td>
                              <td>".$etudiant['Matricule']."</td>
                              <td>".$etudiant['promotion']." ".$etudiant['Code']."</td>
                              <td></td>
                              <td>
                                <button class='btn btn-success btn-sm accescyber btn-flat' data-id='".$etudiant['CodeFrequantant']."'><i class='fa fa-edit'></i> Accès cyber</button>
                                
                              </td>
                            </tr>
                          ";
                          }
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
    <?php include 'modal/frequantantEtudiant.php'; ?>
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

$(document).on('click', '.acces', function(e){
  e.preventDefault();
  $('#acces').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

$(document).on('click', '.equipem', function(e){
  e.preventDefault();
  $('#equipem').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

$(document).on('click', '.accescyber', function(e){
  e.preventDefault();
  $('#accescyber').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

$(document).on('click', '.modal2', function(e){
  e.preventDefault();
  $('#modal2').modal('show');
  var id = $(this).data('id');
  getEquipement(id);
});
$(document).on('click', '.equipement', function(e){
  e.preventDefault();
  $('#addequipement').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

});

function getRow(id){
$.ajax({
  type: 'POST',
  url: 'operation/frequantant_row.php',
  data: {id:id},
  dataType: 'json',
  success: function(response){
    $('.frequantant').val(response.CodeFrequantant);
   }
});
}

function getEquipement(id){
$.ajax({
  type: 'POST',
  url: 'operation/equipement_row.php',
  data: {id:id},
  dataType: 'json',
  success: function(response){
    $('.equipement').val(response.CodeCategorie);
   }
});
}
</script>
</body>
</html>
