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
        Promotion
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Promotion</li>
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
              <a href="#addfrequantantPromotion" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
              <a href="#addcours" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="float: right;"><i class="fa fa-plus"></i> Cours</a>
            </div>
            <div class="box-body">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Promotion</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT *, t_promotion.Valeur as promotion, t_option.Valeur as option FROM t_auditoire
                                              INNER JOIN t_promotion
                                              ON t_auditoire.CodePromotion=t_promotion.CodePromotion
                                              INNER JOIN t_option
                                              ON t_auditoire.CodeOption=t_option.CodeOption
                                             ");
                      $stmt->execute();
                      foreach($stmt as $promotion){
                       echo "
                          <tr>
                            <td>".$promotion['promotion']." ".$promotion['option']."</td>
                            <td>
                              <button class='btn btn-primary btn-sm acces btn-flat' data-id='".$promotion['CodeAuditoire']."'><i class='fa fa-edit'></i> Accès</button>
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

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'modal/cours.php'; ?>
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

$(document).on('click', '.acces', function(e){
  e.preventDefault();
  $('#acces').modal('show');
  var id = $(this).data('id');
  getRow(id);
});

});

function getRow(id){
$.ajax({
  type: 'POST',
  url: 'operation/auditoire_row.php',
  data: {id:id},
  dataType: 'json',
  success: function(response){
    $('.frequantant').val(response.CodeAuditoire);
    $('.auditoire').html(response.promotion+' '+response.option+' ?');
   }
});
}
</script>
</body>
</html>
