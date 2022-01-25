<!-- Add -->
<div class="modal fade" id="addmarque">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter une marque de materiel</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_marque_materiel.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="marque" class="col-sm-3 control-label">Materiel</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="marque" name="marque" required>
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


<!-- modifier  -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Modifier la marque</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/update_marque.php" enctype="multipart/form-data">
                <input type="hidden" class="marque" name="id">
                <div class="form-group">
                    <label for="etat" class="col-sm-3 control-label">Marque</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit_marque" name="marque">
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


<!-- modifier  -->
<div class="modal fade" id="desactive">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Masquer cette marque</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/desactive_status.php" enctype="multipart/form-data">
              <input type="hidden" class="marque" name="id">
              <div class="text-center">
                    <p>MASQUER LA MARQUE</p>
                    <h2 class="bold fullname"></h2>
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



<!-- Activate -->
<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Activation...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/active_marque.php">
                <input type="hidden" class="marque" name="id">
                <div class="text-center">
                    <p>RENDRE VISIBLE LA MARQUE</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-success btn-flat" name="update"><i class="fa fa-check"></i> Activer</button>
              </form>
            </div>
        </div>
    </div>
</div> 


     