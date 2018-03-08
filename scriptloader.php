<?php
  // Check of de $_GET["status"] bestaat
  if ( isset($_GET["status"])) {

    // include de sanitize functie
    include("./functions/functions.php");

    // Maak de $_GET["status] variabele schoon
    $status = sanitize($_GET["status"]);

    // Dit is een whitelist van mogelijke javascript files die geladen mogen worden
    $white_list = array("emailempty", "emailexists", "nocheck", "success", "createpassword", "activate_success", "activate_empty", "nomatchpassword", "registerform");
     
    // Als de $status waarde in de whitelist staat dan wordt dat script geladen.
    if ( in_array($status, $white_list)) {
      echo "<script src='./js/registerform/{$status}.js'></script>";      
    }
  }
?>