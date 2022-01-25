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
        Details ordinateur
      </h1>
      <ol class="breadcrumb">
        <li><a href="ordinateur.php"><i class="fa fa-dashboard"></i> Ordinateur</a></li>
        <li class="active">Details ordinateur</li>
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
                $stmt = $conn->prepare("SELECT CodeMateriel, MacLAN, t_materiel.Modified_on, NumeroCle as cle, MacWIFI, NombreCoeurProcesseur, TensionBatterie, t_type_ram.Valeur as typeram, CapaciteRAM, t_materiel.Observation as obs, CapaciteRAM, CapaciteProcesseur, t_os.Valeur as os, t_type_hdd.Valeur as typehdd, t_capacite_hdd.Valeur as hdd, t_materiel.DateAcquisition, User, Photo1, t_materiel.Etiquette, t_marque_ordinateur.Valeur as Marque, t_couleur.Valeur as Couleur, t_modele.Valeur as Modele, t_garantie.Valeur as Garantie, t_etat_materiel.Valeur as etat, t_type_clavier.Valeur as Clavier, t_affectation.Affectation as Affectation, t_adaptateur.Etiquette as adapt
                                      FROM t_materiel
                                      INNER JOIN t_type_ram
                                      ON t_materiel.CodeTypeRAM=t_type_ram.CodeTypeRAM
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
                                      INNER JOIN t_os
                                      ON t_materiel.CodeOS=t_os.CodeOS
                                      INNER JOIN t_capacite_hdd
                                      ON t_materiel.CodeCapaciteHDD=t_capacite_hdd.CodeCapaciteHDD
                                      INNER JOIN t_type_hdd
                                      ON t_materiel.CodeTypeHDD=t_type_hdd.CodeTypeHDD
                                      WHERE CodeMateriel=$id
                                      ORDER BY Marque");
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
              <div class="row" style="border-color: red;">
                        <?php
                                    foreach($stmt as $pc)
                                    {
                                      $image = (!empty($pc['Photo1'])) ? 'img/'.$pc['Photo1'] : 'img/laptop.png';
                                      ?>
                      <div class="col-md-4 col-xs-12">
                          <div class="white-box">
                              
                              <div class="user-bg"> <img width="100%" alt="pc" src="<?php echo $image; ?>" class="zoom" data-magnify-src="img/large-<?php echo $pc['Photo1']; ?>">
                                  <div class="overlay-box">
                                      <div class="user-content">
                                          <!-- <form method="POST" action="operation/ModifierPhoto.php">
                                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                            <input type="file" name="photo">
                                            <input type="submit" name="modifier" value="Modifier" class="form-control btn-primary">
                                          </form> -->
                                          <h2 class="text-white" style="color: black; text-align: center; font-weight: bold;"><?php echo $pc['Marque'].' '.$pc['Modele'].', '.$pc['Etiquette']; ?></h2>
                                          <h5 class="text-white">
                                        
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-8 col-xs-12" style="border-color: red;">
                            
                      <!-- entete -->
                      <ul class="nav nav-tabs" style="">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id="nav1">Identité</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="nav2">Fonctionnement</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="nav3">Autres</a>
                          </li>
                      </ul>

                        <!-- fin entete -->
                        <!-- form -->
                        <br>
                        <div id="" style="border-radius: 10px 10px 10px 10px;">
                        <form id="form1" class="form-horizontal" method="POST" action="operation/update1.php">
                          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['Marque']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Modele</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['Modele']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Couleur</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['Couleur']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Etiquette</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['Etiquette']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                              <input type="text" name="newusername" class="form-control" id="newusername" placeholder="" value="<?php echo $pc['User']; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Adaptateur</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['adapt']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newaffectation" class="col-sm-2 col-form-label">Affectation</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control" id="affect" placeholder="" value="<?php echo $pc['Affectation']; ?>" readonly>
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
                              <input type="text" name="newobservation" class="form-control" id="newobservation" placeholder="max 50 caractères" value="<?php echo $pc['obs']; ?>">
                            </div>
                          </div>
                          <button class="btn btn-primary" name="update1" style="float: right;">Update</button>
                        </form>




                        <form id="form2" method="POST" action="operation/update2.php">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Système</label>
                            <div class="col-sm-7">
                              <input type="newsysteme" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['os']; ?>" readonly>
                            </div>
                            <div class="col-sm-3">
                            <select name="newsysteme" id="newsysteme" class="form-control">
                                      <?php foreach($os as $row)
                                      {
                                        ?>
                                        <option value="<?php echo $row['CodeOS']; ?>"><?php echo $row['Valeur']; ?></option>
                                        <?php

                                      } ?>
                                      
                                </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">RAM</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['CapaciteRAM']; ?> Go/Mo" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newdisque" class="col-sm-2 col-form-label">Disque dur</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['hdd']; ?>" readonly>
                            </div>
                            <div class="col-sm-3">
                            <select name="newdisque" id="newdisque" class="form-control">
                                      <?php foreach($disque as $row)
                                      {
                                        ?>
                                        <option value="<?php echo $row['CodeCapaciteHDD']; ?>"><?php echo $row['Valeur']; ?></option>
                                        <?php

                                      } ?>
                                      
                                </select>
                           </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Processeur</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['CapaciteProcesseur']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Garantie</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['Garantie']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newetat" class="col-sm-2 col-form-label">Etat</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['etat']; ?>" readonly>
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
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Clavier</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['Clavier']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Tension Batterie</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['TensionBatterie']; ?>" readonly>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="update2" style="float: right;">Update</button>
                        </form>



                        <form id="form3" method="POST" action="operation/update3.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Type HDD</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['typehdd']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newmaclan" class="col-sm-2 col-form-label">Mac LAN</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="newmaclan" id="newmaclan" placeholder="" value="<?php echo $pc['MacLAN']; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newmacwifi" class="col-sm-2 col-form-label">Mac WIFI</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="newmacwifi" id="newmacwifi" placeholder="" value="<?php echo $pc['MacWIFI']; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Nombre processeur</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['NombreCoeurProcesseur']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Type RAM</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $pc['typeram']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newcle" class="col-sm-2 col-form-label">Cle numero</label>
                            <div class="col-sm-10">
                              <input type="number" name="newcle" class="form-control" id="newcle" placeholder="" value="<?php echo $pc['cle']; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="newcle" class="col-sm-2 col-form-label">Dernière modification</label>
                            <div class="col-sm-10">
                              <input type="text" name="datemodif" class="form-control" id="datemodif" placeholder="" value="<?php echo $pc['Modified_on']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Update photo</label>
                            <div class="col-sm-10">
                              <input type="file" name="newphoto" id="newphoto" class="form-control">
                            </div>
                          </div>
                          <button class="btn btn-primary" name="update3" style="float: right;">Update</button>
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


// var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
// triggerTabList.forEach(function (triggerEl) {
//   var tabTrigger = new bootstrap.Tab(triggerEl)

//   triggerEl.addEventListener('click', function (event) {
//     event.preventDefault()
//     tabTrigger.show()
//   })
// })
</script>
<script>
$("#form2").hide();
$("#form3").hide();
        $("#nav1").click(function()
        {
            $("#form1").show();
            $("#form2").hide();
            $("#form3").hide();
            
           
        });
        $("#nav2").click(function()
        {
            $("#form2").show();
            $("#form1").hide();
            $("#form3").hide();
           
        });
        $("#nav3").click(function()
        {
            $("#form3").show();
            $("#form1").hide();
            $("#form2").hide();
           
        });
</script>
</body>
</html>
