<?php
// include '../includes/sessionconnected.php';

$conn = $pdo->open();

$auditoire = $conn->prepare("SELECT * FROM t_cours
                                INNER JOIN t_auditoire
                                ON t_cours.CodeAuditoire=t_auditoire.CodeAuditoire
                                INNER JOIN t_promotion
                                ON t_auditoire.CodePromotion=t_promotion.CodePromotion
                                INNER JOIN t_option
                                ON t_auditoire.CodeOption=t_option.CodeOption");
$auditoire->execute();

$pdo->close();
?>
<!-- Add -->
<div class="modal fade" id="addcours">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter un cours</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_cours.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="promotion" class="col-sm-3 control-label">Cours</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cours" id="cours">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="promotion" class="col-sm-3 control-label">Enseignant</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="enseignant" id="enseignant">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="auditoire" class="col-sm-3 control-label">Auditoire</label>

                    <div class="col-sm-9">
                        <select name="auditoire" id="auditoire" class="form-control">
                            <?php
                            foreach($auditoire as $row)
                            {
                                ?>
                                 <option value="<?php echo $row['CodeAuditoire']; ?>"><?php echo $row['Valeur'].' '.$row['Valeur']; ?></option>
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
