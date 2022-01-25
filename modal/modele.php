<!-- Add -->
<div class="modal fade" id="addmodele">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter un modele a</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_modele.php" enctype="multipart/form-data">
              <input type="hidden" class="marque" name="id">
                <div class="text-center">
                    <h2 class="bold fullname"></h2>
                </div>
              <div class="form-group">
                    <label for="modele" class="col-sm-3 control-label">Modele</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="modele" name="modele" required>
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


     