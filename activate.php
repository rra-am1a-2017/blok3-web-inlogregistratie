<?php
  include("./functions/functions.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);

  if (!empty($password) && !empty($checkpassword)) {

    if ( !strcmp($password, $checkpassword)) {

      include("./connect_db.php");
      $blowfish_password = password_hash($password, PASSWORD_BCRYPT);
      echo $blowfish_password; exit();

      $sql = "";
      echo "Opslaan";
    } else {
      echo "wachtwoorden zijn niet gelijk";
    }

    
  } else {
    echo "Een van beide velden niet ingevuld";
  }

?>