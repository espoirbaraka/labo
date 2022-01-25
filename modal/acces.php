<?php
// include '../includes/sessionconnected.php';

$conn = $pdo->open();

$ordinateur = $conn->prepare("SELECT CodeMateriel, Etiquette,t_marque_ordinateur.Valeur as marque, t_couleur.Valeur as couleur, t_modele.Valeur as modele FROM t_materiel
                            INNER JOIN t_marque_ordinateur
                            ON t_materiel.CodeMarque=t_marque_ordinateur.CodeMarque
                            INNER JOIN t_modele
                            ON t_materiel.CodeModele=t_modele.CodeModele
                            INNER JOIN t_couleur
                            ON t_materiel.CodeCouleur=t_couleur.CodeCouleur
                            ORDER BY Etiquette");
$ordinateur->execute();

$pdo->close();
?>
<!-- Changer la machine -->
<div class="modal fade" id="change">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Changer la machine</b></h4>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" method="POST" action="operation/changer_pc.php">
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