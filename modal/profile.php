<!-- Edit profile -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Profil de l'utilisateur</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="operation/profile_update.php?return=<?php echo '../'.basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="username" class="col-sm-3 control-label">Username</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="username" name="username" value="<?php echo $user['Username']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="mail" class="col-sm-3 control-label">Mail address</label>

                    <div class="col-sm-9"> 
                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['Email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Mot de passe</label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['Password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Nom</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['Nom']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="postnom" class="col-sm-3 control-label">Post-nom</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="postnom" name="postnom" value="<?php echo $user['Postnom']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="prenom" class="col-sm-3 control-label">Prenom</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $user['Prenom']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo:</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Mot de passe actuel:</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password_actuel" name="password_actuel" placeholder="entrer le mot de passe actuel pour enregistrer les modifications" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <!-- <input type="reset"  name="Reset" id="button" value="Reset" /> -->
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Enregistrer</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
