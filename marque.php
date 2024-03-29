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
        Marques de <?php echo $lamarque['Designation'] ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Marques de <?php echo $lamarque['Designation'] ?></li>
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
              <a href="#addmarque" class="btn btn-primary modele btn-sm btn-flat" data-toggle="modal" data-id="<?php echo $lamarque['CodeCategorie'];?>"><i class="fa fa-plus"></i> Nouveau</a>
            </div>
            <div class="box-body">
              <div style="overflow: auto;">
              <table id="tableau" class="table table-bordered" style="border-color: red;">
                <thead>
                  <th>Marque</th>
                  <th>Date d'ajout</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur WHERE CodeCategorieMateriel=?");
                      $stmt->execute(array($id));
                      foreach($stmt as $marque){
                        echo "
                          <tr>
                            <td>".$marque['Valeur']."</td>
                            <td>".$marque['Created_on']."</td>
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
    <?php include 'modal/marque.php'; ?>
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


$(document).on('click', '.modele', function(e){
  e.preventDefault();
  var id = $(this).data('id');
  getRow(id);
});


});

function getRow(id){
$.ajax({
  type: 'POST',
  url: 'operation/marque_row.php',
  data: {id:id},
  dataType: 'json',
  success: function(response){
    $('.marque').val(response.CodeCategorie);
    $('.fullname').html(response.Designation);
   }
});
}
</script>
</body>
</html>
