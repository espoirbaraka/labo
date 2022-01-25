<!-- Add -->
<div class="modal fade" id="addsiege">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter un siege</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_siege.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="siege" class="col-sm-3 control-label">Etiquette</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="siege" id="siege" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="detail" class="col-sm-3 control-label">Petits details</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="detail" id="detail">
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
