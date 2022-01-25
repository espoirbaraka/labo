<?php 
  include 'includes/sessionconnected.php';
  include 'includes/format.php'; 
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
        Details Adaptateur
      </h1>
      <ol class="breadcrumb">
        <li><a href="adaptateur.php"><i class="fa fa-dashboard"></i> Adaptateur</a></li>
        <li class="active">Details Adaptateur</li>
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
      <div class="row" style="border-color: red;">
        <div class="col-xs-12">
          <div class="box" border-color: red;>
            
          <?php
                $conn = $pdo->open();
                $id = $_GET['id'];
                $stmt = $conn->prepare("SELECT CodeAdaptateur, Observation, Etiquette, t_etat_materiel.Valeur as etat, DateAcquisition, TensionAdaptateur, PuissanceAdaptateur, t_marque_adaptateur.Valeur as marque, t_affectation.Affectation as affectation
                                        FROM t_adaptateur
                                        INNER JOIN t_affectation
                                        ON t_adaptateur.CodeAffectation=t_affectation.CodeAffectation
                                        INNER JOIN t_etat_materiel
                                        ON t_adaptateur.CodeEtatMateriel=t_etat_materiel.CodeEtat
                                        INNER JOIN t_marque_adaptateur
                                        ON t_adaptateur.CodeMarqueAdaptateur=t_marque_adaptateur.CodeMarqueAdaptateur
                                      WHERE CodeAdaptateur=$id");
                                      $stmt->execute();
                $affectation = $conn->prepare("SELECT * FROM t_affectation");
                $affectation->execute();
                $etat = $conn->prepare("SELECT * FROM t_etat_materiel");
                $etat->execute();
                $os = $conn->prepare("SELECT * FROM t_os");
                $os->execute();
                $disque = $conn->prepare("SELECT * FROM t_capacite_hdd");
                $disque->execute();
                $pdo->close();
          ?>



            <div class="box-body">
              <div class="row" style="border-color: red; margin: 0px auto; width: 70%;">
                        <?php
                                    foreach($stmt as $ad)
                                    {
                                     
                                      ?>
                      <!-- entete -->
                      <div class="col-md-12 col-xs-12" style="border-color: red;">
                      <!-- <ul class="nav nav-tabs" style="">
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="nav1">Identité</a>
                          </li>
                        </ul> -->

                        <!-- fin entete -->
                        <!-- form -->
                        <br>
                        <div id="" style="border-radius: 10px 10px 10px 10px;">
                        <h3 style="color: red; text-align: center; font-size: bold;">ADAPTATEUR : <?php echo $ad['Etiquette']; ?></h3>
                        <form id="form1" class="form-horizontal" method="POST" action="operation/update4.php">
                          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                          
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $ad['marque']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Etiquette</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="newetiquette" value="<?php echo $ad['Etiquette']; ?>">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Puissance</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $ad['PuissanceAdaptateur']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Tension</label>
                            <div class="col-sm-10">
                              <input type="text" name="newusername" class="form-control" id="newusername" placeholder="" value="<?php echo $ad['TensionAdaptateur']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Etat</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $ad['etat']; ?>" readonly>
                            </div>
                            <div class="col-sm-3">
                                <select name="newetat" id="newetat" class="form-control">
                                      <?php foreach($etat as $row)
                                      {
                                        ?>
                                        <option value="<?php echo $row['CodeEtat']; ?>"><?php echo $row['Valeur']; ?></option>
                                        <?php

                                      } ?>
                                      
                                </select>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="newaffectation" class="col-sm-2 col-form-label">Affectation</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control" id="affect" placeholder="" value="<?php echo $ad['affectation']; ?>" readonly>
                            </div>
                            <div class="col-sm-3">
                                <select name="newaffectation" id="newaffectation" class="form-control">
                                      <?php foreach($affectation as $row)
                                      {
                                        ?>
                                        <option value="<?php echo $row['CodeAffectation']; ?>"><?php echo $row['Affectation']; ?></option>
                                        <?php

                                      } ?>
                                      
                                </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newobservation" class="col-sm-2 col-form-label">Observation</label>
                            <div class="col-sm-10">
                              <input type="text" name="obs" class="form-control" id="obs" placeholder="max 50 caractères" value="<?php echo $ad['Observation']; ?>">
                            </div>
                          </div>
                          <button class="btn btn-primary" name="update" style="float: right;">Update</button>
                        </form>
                        </div>


                        <!-- end form -->



                      
                      </div>


                      <?php
                                      
                                    }
                                    ?>
              
            </div>
          </div>
        </div>
      </div>



      

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'modal/ordinateur.php'; ?>
    <?php include 'modal/ordinateur2.php'; ?>
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

</script>
</body>
</html>
