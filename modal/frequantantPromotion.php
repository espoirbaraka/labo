<?php
// include '../includes/sessionconnected.php';

$conn = $pdo->open();

$option = $conn->prepare("SELECT * FROM t_option");
$option->execute();
$promotion = $conn->prepare("SELECT * FROM t_promotion");
$promotion->execute();
$cours = $conn->prepare("SELECT *,t_promotion.Valeur as prom, t_option.Valeur as opt FROM t_cours 
                            INNER JOIN t_auditoire
                            ON t_cours.CodeAuditoire=t_auditoire.CodeAuditoire
                            INNER JOIN t_promotion
                            ON t_auditoire.CodePromotion=t_promotion.CodePromotion
                            INNER JOIN t_option
                            ON t_auditoire.CodeOption=t_option.CodeOption");
$cours->execute();
$pdo->close();
?>
<!-- Add -->
<div class="modal fade" id="addfrequantantPromotion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Creer un auditoire</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_auditoire.php" enctype="multipart/form-data">

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

<!-- Edit -->
<div class="modal fade" id="acces">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Donner l'accès</b></h4>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" method="POST" action="operation/add_frequantation_auditoire.php">
                <input type="hidden" class="frequantant" name="id">
                <div class="text-center">
                    <p>DONNER L'ACCES A LA PROMOTION</p>
                    <p class="bold auditoire"></p>
                   
                    <div class="form-group">
                    <label for="nom" class="col-sm-3 control-label">Cours</label>

                    <div class="col-sm-9">
                      <select name="cours" id="cours" class="form-control">
                                <?php foreach($cours as $row){
                                    ?>
                                    <option value="<?php echo $row['CodeCours'] ?>"><?php echo $row['DesignationCours'].' / '.$row['prom'].' '.$row['opt'] ?></option>
                                    <?php
                                } ?>
                                
                      </select>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="autoriser"><i class="fa fa-trash"></i> Acces</button>
              </form>
            </div>
        </div>
    </div>
</div>




 <!-- Fin -->
<div class="modal fade" id="finir">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Fin de l'accès ?</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/fin_acces_auditoire.php">
                <input type="hidden" class="frequantation" name="id">
                <!-- <div class="text-center">
                    <p>FIN DE L'ACCES POUR</p>
                    <h2 class="bold fullname"></h2>
                </div> -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="fin"><i class="fa fa-trash"></i> Fin</button>
              </form>
            </div>
        </div>
    </div>
</div>   