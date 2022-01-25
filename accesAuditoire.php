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
        Accès pour auditoire
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Accès pour auditoire</li>
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
              <div style="overflow: auto;">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Date</th>
                  <th>Auditoire</th>
                  <th>Cours</th>
                  <th>Heure d'arrivé</th>
                  <th>Heure depart</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT CodeFrequantation, Date, t_frequantation.Status, HeureArrive, HeureDepart,t_promotion.Valeur as promotion, t_option.Valeur as option, t_cours.DesignationCours as cours FROM t_frequantation
                      INNER JOIN t_auditoire
                      ON t_frequantation.CodeAuditoire=t_auditoire.CodeAuditoire
                      INNER JOIN t_option
                      ON t_auditoire.CodeOption=t_option.CodeOption
                      INNER JOIN t_promotion
                      ON t_auditoire.CodePromotion=t_promotion.CodePromotion
                      INNER JOIN t_cours
                      ON t_frequantation.CodeCours=t_cours.CodeCours
                      WHERE CodeCategorieFrequantant=2 AND t_frequantation.CodeService=?
                      ORDER BY Status
                      ");
                      $stmt->execute(array($service));
                      foreach($stmt as $frequantation){
                        $heuredepart = $frequantation['HeureDepart'];
                        $status = $frequantation['Status'];
                        if($status == 1)
                        {
                        echo "
                        <tr>
                          <td>".$frequantation['Date']."</td>
                          <td>".$frequantation['promotion'].' '.$frequantation['option']."</td>
                          <td>".$frequantation['cours']."</td>
                          <td>".$frequantation['HeureArrive']."</td>
                          <td>".$frequantation['HeureDepart']."</td>
                          <td>
                              <button class='btn btn-danger btn-sm desactivate btn-flat' data-id='' disabled> En cours ...</button>
                              <button class='btn btn-success btn-sm finir btn-flat' data-id='".$frequantation['CodeFrequantation']."'><i class='fa fa-edit'></i> Fin</button>
                          </td>
                        </tr>
                      ";
                        }
                        else
                        {
                          echo "
                          <tr>
                          <td>".$frequantation['Date']."</td>
                          <td>".$frequantation['promotion'].' '.$frequantation['option']."</td>
                          <td>".$frequantation['cours']."</td>
                          <td>".$frequantation['HeureArrive']."</td>
                          <td>".$frequantation['HeureDepart']."</td>
                            <td>
                            <a href='RapportFrequantation.php' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-print'></i> Fiche de frequantation</a>
                              
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
    <?php include 'modal/frequantantPromotion.php'; ?>
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


$(document).on('click', '.finir', function(e){
  e.preventDefault();
  $('#finir').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

});

function getRow(id){
$.ajax({
  type: 'POST',
  url: 'operation/auditoire_fin_row.php',
  data: {id:id},
  dataType: 'json',
  success: function(response){
    $('.frequantation').val(response.CodeFrequantation);
    // $('.fullname').html(response.promotion+' '+response.option+' ?');
   }
});
}
</script>
</body>
</html>
