<?php
  $userroles = array("administrator", "superadmin", "subscriber");
  include("./security.php");  
?>

<h1>startpagina subscribers</h1>
<p>Welkom <?php if (isset($_SESSION["email"])) {echo $_SESSION["email"];} ?></p>