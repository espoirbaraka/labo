<?php
$conn = $pdo->open();

$service = $conn->prepare("SELECT * FROM t_service");
$service->execute();

$pdo->close();
?>
<!-- Edit password -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Editer le mot de passe</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/update_user_password.php" enctype="multipart/form-data">
                <input type="hidden" name="id" class="code">
              <div class="form-group">
                    <label for="etiquette" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
            </div>    
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="update"><i class="fa fa-edit"></i> Modifier</button>
              </form>
            </div>
        </div>
    </div>
</div>



<!-- Add -->
<div class="modal fade" id="adduser">
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" style="text-align: center;"><b>Ajouter utilisateur</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_user.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="etiquette" class="col-sm-3 control-label">Nom</label>
                    <div class="col-sm-9">
                      <input type="text" id="nom" name="nom" autocomplet="off" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="etiquette" class="col-sm-3 control-label">Post-nom</label>
                    <div class="col-sm-9">
                      <input type="text" id="postnom" name="postnom" autocomplet="off" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-sm-3 control-label">Prenom</label>
                    <div class="col-sm-9">
                      <input type="text" id="postnom" name="prenom" autocomplet="off" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="etiquette" class="col-sm-3 control-label">Mail</label>
                    <div class="col-sm-9">
                      <input type="email" id="mail" name="mail" autocomplet="off" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="etiquette" class="col-sm-3 control-label">Service</label>
                    <div class="col-sm-9">
                      <select name="service" id="service" class="form-control">
                            <?php
                            foreach($service as $row){
                              ?>
                              <option class="form-control" value="<?php echo $row['CodeService']; ?>"><?php echo $row['Service']; ?></option>
                              <?php
                            }
                            ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" id="username" name="username" autocomplet="off" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplet="off" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" class="form-control">
                    </div>
                </div>
            </div>  
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Enregistrer</button>
              </form>
            </div>
        </div>
    </div>
</div>




<!-- remove -->
<div class="modal fade" id="remove">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Supprimer l'utilisateur</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/delete_user.php" enctype="multipart/form-data">
                
                      <input type="hidden" name="id" class="code">
                      <h2 class='bold fullname'></h2>
                
                
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="remove"><i class="fa fa-remove"></i> Supprimer</button>
              </form>
            </div>
        </div>
    </div>
</div>



     