<!-- Modal -->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="./register.php">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Registreer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group" id="emailExists">
            <label for="exampleInputEmail1">E-mailadres</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="uw e-mailadres" name="email">
            <small id="emailHelp" class="form-text text-muted">We zullen uw e-mailadres niet delen met anderen</small>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="conditions">
            <label class="form-check-label" for="exampleCheck1">Ik ga akkoord met de algemene voorwaarden.</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Verzend</button>
        </div>
      </form>
    </div>
  </div>
</div>
