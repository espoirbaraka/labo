<?php
// include '../includes/sessionconnected.php';

$conn = $pdo->open();

$option = $conn->prepare("SELECT * FROM t_option");
$option->execute();
$promotion = $conn->prepare("SELECT * FROM t_promotion");
$promotion->execute();
$marque = $conn->prepare("SELECT * FROM t_marque_ordinateur");
$marque->execute();
$couleur = $conn->prepare("SELECT * FROM t_couleur");
$couleur->execute();
$siege = $conn->prepare("SELECT * FROM t_siege WHERE CodeService = ?");
$siege->execute(array($service));
$siege2 = $conn->prepare("SELECT * FROM t_siege WHERE CodeService = ?");
$siege2->execute(array($service));
$ordinateur = $conn->prepare("SELECT CodeMateriel, Etiquette,t_marque_ordinateur.Valeur as marque, t_couleur.Valeur as couleur, t_modele.Valeur as modele FROM t_materiel
                            INNER JOIN t_marque_ordinateur
                            ON t_materiel.CodeMarque=t_marque_ordinateur.CodeMarque
                            INNER JOIN t_modele
                            ON t_materiel.CodeModele=t_modele.CodeModele
                            INNER JOIN t_couleur
                            ON t_materiel.CodeCouleur=t_couleur.CodeCouleur
                            WHERE CodeService=?
                            ORDER BY Etiquette");
$ordinateur->execute(array($service));
$categ = $conn->prepare("SELECT * FROM t_categorie_materiel WHERE CodeService=?");
$categ->execute(array($service));
$codeequipement = $_POST['idetiq'];
$etiq = $conn->prepare("SELECT * FROM t_materiel WHERE CodeService=?");
$etiq->execute(array($service));

$pdo->close();
?>
<!-- Add -->
<div class="modal fade" id="addfrequantant">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter Etudiant</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_etudiant.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom" class="col-sm-3 control-label">Nom</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="postnom" class="col-sm-3 control-label">Postnom</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="postnom" name="postnom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-sm-3 control-label">Prenom</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="matricule" class="col-sm-3 control-label">Matricule</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="matricule" name="matricule" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="promotion" class="col-sm-3 control-label">Promotion</label>

                    <div class="col-sm-9">
                        <select name="promotion" id="promotion" class="form-control">
                            <?php
                                foreach($promotion as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodePromotion']; ?>"><?php echo $row['Valeur']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="option" class="col-sm-3 control-label">Option</label>

                    <div class="col-sm-9">
                    <select name="option" id="option" class="form-control">
                            <?php
                                foreach($option as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodeOption']; ?>"><?php echo $row['Valeur']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
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


<!-- Add equipement-->
<div class="modal fade" id="addequipement">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Enregistrer les équipements d'un étudiant</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_equipement.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" class="frequantant" name="id">
                    <label for="marque" class="col-sm-3 control-label">Marque ordinateur</label>

                    <div class="col-sm-9">
                        <select name="marque" id="marque" class="form-control">
                            <?php
                                foreach($marque as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodeMarque']; ?>"><?php echo $row['Valeur']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="couleur" class="col-sm-3 control-label">Couleur ordinateur</label>

                    <div class="col-sm-9">
                        <select name="couleur" id="couleur" class="form-control">
                            <?php
                                foreach($couleur as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodeCouleur']; ?>"><?php echo $row['Valeur']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="siege" class="col-sm-3 control-label">Siege</label>

                    <div class="col-sm-9">
                        <select name="siege" id="siege" class="form-control">
                            <?php
                                foreach($siege as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodeSiege']; ?>"><?php echo $row['EtiquetteSiege']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
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



<!-- Acces cyber-->
<div class="modal fade" id="accescyber">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Donner l'acces</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/acces_cyber.php" enctype="multipart/form-data">
              <input type="hidden" class="frequantant" name="id">
                <div class="form-group">
                    <label for="siege" class="col-sm-3 control-label">Siege</label>

                    <div class="col-sm-9">
                        <select name="siege" id="siege" class="form-control">
                            <?php
                                foreach($siege2 as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodeSiege']; ?>"><?php echo $row['EtiquetteSiege']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
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

<!-- acces -->
<div class="modal fade" id="acces">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Donner l'accès</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_frequantation_etudiant.php">
                <input type="hidden" class="frequantant" name="id">
                <div class="form-group">
                    <label for="ordinateur" class="col-sm-3 control-label">Ordinateur</label>

                    <div class="col-sm-9">
                    <select name="ordinateur" id="ordinateur" class="form-control">
                            <?php
                                foreach($ordinateur as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodeMateriel']; ?>"><?php echo $row['Etiquette'].' ('.$row['marque'].' '.$row['modele'].' de couleur '.$row['couleur'].')'; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-success btn-flat" name="autoriser"><i class="fa fa-check-square-o"></i> Autorisé</button>
              </form>
            </div>
        </div>
    </div>
</div>



<!-- essai -->
<div class="modal fade" id="equipem">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Choisi le type d'equipement</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_frequantation_etudiant.php">
                <input type="hidden" class="frequantant" name="id">
                <div class="form-group">
                    <label for="categ" class="col-sm-3 control-label">Equipement</label>

                    <div class="col-sm-9">
                    <select name="categ" id="categ" class="form-control">
                            <?php
                                foreach($categ as $row)
                                {
                                    ?>
                                    <option data-id="<?php echo $row['CodeCategorie']; ?>" class="modal2"><?php echo $row['Designation']; ?></option>
                                    <?php
                                }
                            ?>
                    </select>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <!-- <button type="submit" class="btn btn-success btn-flat" name="autoriser"><i class="fa fa-check-square-o"></i> Autorisé</button> -->
              </form>
            </div>
        </div>
    </div>
</div>

     

<!-- modal 2 -->
<div class="modal fade" id="modal2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Choisi l'etiquette de l'equipement</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_frequantation_etudiant2.php">
                <input type="hidden" class="equipement" name="equip">
                <input type="hidden" class="frequantant" name="freq">
                <div class="form-group">
                    <label for="materiel" class="col-sm-3 control-label">Etiquette</label>

                    <div class="col-sm-9">
                    <select name="materiel" id="materiel" class="form-control">
                            <?php
                                foreach($etiq as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['CodeMateriel']; ?>" class="modal2"><?php echo $row['Etiquette']; ?></option>
                                    <?php
                                }
                            ?>
                    </select>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-success btn-flat" name="autoriser"><i class="fa fa-check-square-o"></i> Autorisé</button>
              </form>
            </div>
        </div>
    </div>
</div>