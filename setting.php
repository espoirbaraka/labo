<?php 
  include 'includes/sessionconnected.php';
//   include 'includes/format.php'; 
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
       Parametres
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="active">Parametres</li>
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
        <!-- <div class="col-md-3">
            <div class="box" border-color: red;>
                <div class="box-body">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Another label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box" border-color: red;>
                <div class="box-body">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Another label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box" border-color: red;>
                <div class="box-body">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Another label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box" border-color: red;>
                <div class="box-body">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Another label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                        </form>
                </div>
            </div>
        </div> -->

<!-- entete -->
    <div class="col-md-12">
        <div class="box" border-color: red;>
                <div class="box-body">
                    <!-- en-tete -->
                    <ul class="nav nav-tabs" style="">
                        <li class="nav-item" style="">
                            <a class="nav-link" href="#" id="nav1">Marque d'ordinateur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav2">Modele d'ordinateur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav3">Cours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav4">Couleur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav5">Faculté</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav6">Syst. d'exp.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="nav7">Switch & routeur</a>
                        </li>
                    </ul>
                    <!-- form -->
                    
                    <div id="interface1" style="border-radius: 10px 10px 10px 10px; margin: 20px;">
                        <form id="form1" class="form-horizontal" style="width: 60%; margin: 0px auto;" method="POST" action="operation/setting/add_marque_ordi.php">
                        <h3 style=" font-weight: bold;">Ajouter une marque</h3>
                          <div class="form-group row">
                            <!-- <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label> -->
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="marque" id="exampleFormControlInput1" placeholder="Ajouter une marque" required>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="add1" style="float: right;">Ajouter</button>
                        </form> 
                        <br><br>
                        <div style="overflow: auto;">
                        <table id="tableau" class="table table-bordered" style="border-color: red; margin: 10px 0px 0px 0px; overflow: scroll;">
                            <thead>
                                <th>Marque</th>
                                <th>Date d'ajout</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn = $pdo->open();

                                try{
                                $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur ORDER BY Valeur DESC");
                                $stmt->execute();
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



                    <div id="interface2" style="border-radius: 10px 10px 10px 10px; margin: 20px;">
                        <form id="form1" class="form-horizontal" style="width: 90%; margin: 0px auto;" method="POST" action="operation/setting/add_marque_ordi.php">
                            <h2 style="text-align: center;">Ajouter un modele</h2>
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marque" id="exampleFormControlInput1" placeholder="Ajouter une marque" required>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="add1" style="float: right;">Ajouter</button>
                        </form> 
                        <br><br>
                        <div style="overflow: auto;">
                        <table id="tableau" class="table table-bordered" style="border-color: red; margin: 10px 0px 0px 0px; overflow: scroll;">
                            <thead>
                                <th>Marque</th>
                                <th>Date d'ajout</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn = $pdo->open();

                                try{
                                $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur ORDER BY Valeur DESC");
                                $stmt->execute();
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



                    <div id="interface3" style="border-radius: 10px 10px 10px 10px; margin: 20px;">
                        <form id="form1" class="form-horizontal" style="width: 90%; margin: 0px auto;" method="POST" action="operation/setting/add_marque_ordi.php">
                            
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marque" id="exampleFormControlInput1" placeholder="Ajouter une marque" required>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="add1" style="float: right;">Ajouter</button>
                        </form> 
                        <br><br>
                        <div style="overflow: auto;">
                        <table id="tableau" class="table table-bordered" style="border-color: red; margin: 10px 0px 0px 0px; overflow: scroll;">
                            <thead>
                                <th>Marque</th>
                                <th>Date d'ajout</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn = $pdo->open();

                                try{
                                $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur ORDER BY Valeur DESC");
                                $stmt->execute();
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



                    <div id="interface4" style="border-radius: 10px 10px 10px 10px; margin: 20px;">
                        <form id="form1" class="form-horizontal" style="width: 90%; margin: 0px auto;" method="POST" action="operation/setting/add_marque_ordi.php">
                            
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marque" id="exampleFormControlInput1" placeholder="Ajouter une marque" required>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="add1" style="float: right;">Ajouter</button>
                        </form> 
                        <br><br>
                        <div style="overflow: auto;">
                        <table id="tableau" class="table table-bordered" style="border-color: red; margin: 10px 0px 0px 0px; overflow: scroll;">
                            <thead>
                                <th>Marque</th>
                                <th>Date d'ajout</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn = $pdo->open();

                                try{
                                $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur ORDER BY Valeur DESC");
                                $stmt->execute();
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



                    <div id="interface5" style="border-radius: 10px 10px 10px 10px; margin: 20px;">
                        <form id="form1" class="form-horizontal" style="width: 90%; margin: 0px auto;" method="POST" action="operation/setting/add_marque_ordi.php">
                            
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marque" id="exampleFormControlInput1" placeholder="Ajouter une marque" required>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="add1" style="float: right;">Ajouter</button>
                        </form> 
                        <br><br>
                        <div style="overflow: auto;">
                        <table id="tableau" class="table table-bordered" style="border-color: red; margin: 10px 0px 0px 0px; overflow: scroll;">
                            <thead>
                                <th>Marque</th>
                                <th>Date d'ajout</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn = $pdo->open();

                                try{
                                $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur ORDER BY Valeur DESC");
                                $stmt->execute();
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


                    <div id="interface6" style="border-radius: 10px 10px 10px 10px; margin: 20px;">
                        <form id="form1" class="form-horizontal" style="width: 90%; margin: 0px auto;" method="POST" action="operation/setting/add_marque_ordi.php">
                            
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marque" id="exampleFormControlInput1" placeholder="Ajouter une marque" required>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="add1" style="float: right;">Ajouter</button>
                        </form> 
                        <br><br>
                        <div style="overflow: auto;">
                        <table id="tableau" class="table table-bordered" style="border-color: red; margin: 10px 0px 0px 0px; overflow: scroll;">
                            <thead>
                                <th>Marque</th>
                                <th>Date d'ajout</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn = $pdo->open();

                                try{
                                $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur ORDER BY Valeur DESC");
                                $stmt->execute();
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


                    
                    <div id="interface7" style="border-radius: 10px 10px 10px 10px; margin: 20px;">
                        <form id="form1" class="form-horizontal" style="width: 90%; margin: 0px auto;" method="POST" action="operation/setting/add_marque_ordi.php">
                            
                          <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Marque</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marque" id="exampleFormControlInput1" placeholder="Ajouter une marque" required>
                            </div>
                          </div>
                          <button class="btn btn-primary" name="add1" style="float: right;">Ajouter</button>
                        </form> 
                        <br><br>
                        <div style="overflow: auto;">
                        <table id="tableau" class="table table-bordered" style="border-color: red; margin: 10px 0px 0px 0px; overflow: scroll;">
                            <thead>
                                <th>Marque</th>
                                <th>Date d'ajout</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn = $pdo->open();

                                try{
                                $stmt = $conn->prepare("SELECT * FROM t_marque_ordinateur ORDER BY Valeur DESC");
                                $stmt->execute();
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

        
                        
                        <!-- end form -->
















      </div>


      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>
           







      







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
<script>
$("#interface2").hide();
$("#interface3").hide();
$("#interface4").hide();
$("#interface5").hide();
$("#interface6").hide();
$("#interface7").hide();
        $("#nav1").click(function()
        {
            $("#interface1").show();
            $("#interface2").hide();
            $("#interface3").hide();
            $("#interface4").hide();
            $("#interface5").hide();
            $("#interface6").hide();
            $("#interface7").hide();
            
           
        });
        $("#nav2").click(function()
        {
            $("#interface1").hide();
            $("#interface2").show();
            $("#interface3").hide();
            $("#interface4").hide();
            $("#interface5").hide();
            $("#interface6").hide();
            $("#interface7").hide();
            
           
        });
        $("#nav3").click(function()
        {
            $("#interface1").hide();
            $("#interface2").hide();
            $("#interface3").show();
            $("#interface4").hide();
            $("#interface5").hide();
            $("#interface6").hide();
            $("#interface7").hide();
            
           
        });
        $("#nav4").click(function()
        {
            $("#interface1").hide();
            $("#interface2").hide();
            $("#interface3").hide();
            $("#interface4").show();
            $("#interface5").hide();
            $("#interface6").hide();
            $("#interface7").hide();
            
           
        });
        $("#nav5").click(function()
        {
            $("#interface1").hide();
            $("#interface2").hide();
            $("#interface3").hide();
            $("#interface4").hide();
            $("#interface5").show();
            $("#interface6").hide();
            $("#interface7").hide();
            
           
        });
        $("#nav6").click(function()
        {
            $("#interface1").hide();
            $("#interface2").hide();
            $("#interface3").hide();
            $("#interface4").hide();
            $("#interface5").hide();
            $("#interface6").show();
            $("#interface7").hide();
            
           
        });
        $("#nav7").click(function()
        {
            $("#interface1").hide();
            $("#interface2").hide();
            $("#interface3").hide();
            $("#interface4").hide();
            $("#interface5").hide();
            $("#interface6").hide();
            $("#interface7").show();
            
           
        });
</script>
</body>
</html>
