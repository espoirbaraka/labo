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
              <form class="form-horizontal" method="POST" action="operation/fin_acces.php">
                <input type="hidden" class="frequantation" name="id">
                <div class="text-center">
                    <p>FIN DE L'ACCES POUR</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="fin"><i class="fa fa-trash"></i> Fin</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Fin -->
<div class="modal fade" id="finircyber">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Fin de l'accès ?</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="operation/fin_acces_cyber.php">
                <input type="hidden" class="frequantation" name="id">
                <div class="text-center">
                    <p>FIN DE L'ACCES POUR</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="fin"><i class="fa fa-trash"></i> Fin</button>
              </form>
            </div>
        </div>
    </div>
</div>