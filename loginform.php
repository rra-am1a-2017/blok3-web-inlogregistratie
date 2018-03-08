<!-- Modal -->
<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="./login.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Inloggen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">E-mailadres</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer uw e-mailadres in" name="email">
              <small id="emailHelp" class="form-text text-muted">We zullen nooit uw e-mailadres aan derden overhandigen.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Wachtwoord</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Voer uw wachtwoord in" name="password">
            </div>          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Log in</button>        
        </div>
      </form>
    </div>
  </div>
</div>