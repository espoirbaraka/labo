<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Editer le service</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/update_service.php" enctype="multipart/form-data">
              <input type="hidden" name="id2" class="code">
              <div class="form-group">
                    <div class="col-sm-8">
                      <input type="text" name="edit_service" id="edit_service" class="form-control">
                    </div>
              </div>
              <div class="form-group">
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="edit_abbrev" name="edit_abbrev">
                    </div>
              </div>
              <div class="form-group">
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="edit_chef" name="edit_chef">
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
<div class="modal fade" id="addservice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter un service</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/add_service.php" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-8">
                      <input type="text" name="service" id="service" class="form-control" placeholder="Nom du service">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="abbrev" name="abbrev" placeholder="Abbreviation. Ex: LABO 1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="chef" name="chef" placeholder="Chef de service">
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
              <h4 class="modal-title"><b>Supprimer le service</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/delete_service.php" enctype="multipart/form-data">
                
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






     