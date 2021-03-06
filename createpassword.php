<?php
  // Maak contact met de mysql-server
  include("./connect_db.php");

  // Maak een select query om het record te vinden behorende bij het id
  $sql = "SELECT * FROM `login` WHERE `id` = {$_GET["id"]}";

  // Vuur de query af op de database
  $result = mysqli_query($conn, $sql);

  // Maak van wat je terugkrijgt uit de database een array
  $record = mysqli_fetch_array($result);

  // Als het veld activated binnen het record de waarde yes heeft, doorsturen naar de normale homepage
  if ( $record["activated"] == 'yes') {
    header("Location: ./index.php?action=home");
  }
?>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="./activate" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Kies een wachtwoord</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">       
          <div class="form-group">
            <label for="exampleInputPassword1">Wachtwoord</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord" name="password">
            <small id="pwHelp1" class="form-text text-muted">Kies een sterk wachtwoord</small>       
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Herhaal wachtwoord</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Herhaal wachtwoord" name="checkpassword">
            <small id="pwHelp2" class="form-text text-muted">Herhaal uw wachtwoord voor uw eigen bestwil.</small>       
          </div>
          <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">          
        </div>
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Verzend</button>          
        </div>
      </form>
    </div>
  </div>
</div>