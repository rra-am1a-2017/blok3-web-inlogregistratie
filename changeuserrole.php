<?php
  include("./connect_db.php");

  $sql = "SELECT * FROM `login`";

  $result = mysqli_query($conn, $sql);

  $tableContent = "";
  while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $tableContent .= "<tr><th>" . $record["id"] . "</th><td>" . $record["email"] . "</td><td>" . $record["userrole"] . "</td></tr>";    
  }
?>


<div class="container">
  <div class="row">
    <div class="col-12">
    <!-- jumbotron -->
      <div class="jumbotron">
        <h1 class="display-4">Veranderen van de gebruikersrol</h1>
        <p class="lead">U kunt als superadmin de gebruikersrollen hieronder veranderen.</p>
        <hr class="my-4">
        <p>Verander met verstand.</p>
      </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <!-- table change userrole -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">E-mail</th>
            <th scope="col">Gebruikersrol</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php echo $tableContent; ?>
        </tbody>
      </table>
    </div>
    <div class="col-2"></div>  
  </div>
</div>