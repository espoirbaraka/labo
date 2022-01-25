<?php
// include '../includes/sessionconnected.php';

$conn = $pdo->open();

$marque = $conn->prepare("SELECT * FROM t_marque_imprimante");
$marque->execute();
$puissance = $conn->prepare("SELECT * FROM t_puissance_imprimante");
$puissance->execute();
$etat = $conn->prepare("SELECT * FROM t_etat_materiel");
$etat->execute();
$affectation = $conn->prepare("SELECT * FROM t_affectation");
$affectation->execute();
$couleur = $conn->prepare("SELECT * FROM t_couleur");
$couleur->execute();

$pdo->close();
?>
<!-- Add -->
<div class="modal fade" id="addimprimante">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter imprimante</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_imprimante.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="marque" class="col-sm-3 control-label">Marque</label>

                    <div class="col-sm-9">
                      <select name="marque" id="marque" class="form-control">
                        <?php
                        foreach($marque as $row)
                        {
                            ?>
                            <option value="<?php echo $row['CodeMarqueImprimante']; ?>"><?php echo $row['Valeur']; ?></option>
                            <?php

                        }
                        ?>
                        
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="couleur" class="col-sm-3 control-label">Couleur</label>

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
                    <label for="numero" class="col-sm-3 control-label">Numero</label>

                    <div class="col-sm-9">
                      <input type="text" id="numero" name="numero" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dateacq" class="col-sm-3 control-label">Date d'acquisition</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="dateacq" name="dateacq" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="puissance" class="col-sm-3 control-label">Puissance</label>

                    <div class="col-sm-9">
                      <select name="puissance" id="puissance" class="form-control">
                        <?php
                        foreach($puissance as $row)
                        {
                            ?>
                            <option value="<?php echo $row['CodePuissanceImprimante']; ?>"><?php echo $row['Valeur']; ?></option>
                            <?php

                        }
                        ?>
                        
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="etat" class="col-sm-3 control-label">Etat</label>

                    <div class="col-sm-9">
                        <select name="etat" id="etat" class="form-control">
                        <?php
                        foreach($etat as $row)
                        {
                            ?>
                            <option value="<?php echo $row['CodeEtat']; ?>"><?php echo $row['Valeur']; ?></option>
                            <?php

                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="affectation" class="col-sm-3 control-label">Affectation</label>

                    <div class="col-sm-9">
                        <select name="affectation" id="affectation" class="form-control">
                        <?php
                        foreach($affectation as $row)
                        {
                            ?>
                            <option value="<?php echo $row['CodeAffectation']; ?>"><?php echo $row['Affectation']; ?></option>
                            <?php

                        }
                        ?>
                        </select>
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








     