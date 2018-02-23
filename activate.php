<?php
  include("./functions/functions.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);
  $id = sanitize($_POST["id"]);

  if (!empty($password) && !empty($checkpassword)) {

    if ( !strcmp($password, $checkpassword)) {

      include("./connect_db.php");
      $blowfish_password = password_hash($password, PASSWORD_BCRYPT);
      
      $sql = "UPDATE `login` SET `password`  = '{$blowfish_password}',
                                 `activated` = 'yes' 
                                 
                           WHERE `id` = {$id};";

      mysqli_query($conn, $sql);
      header("Location: ./index.php?action=createpassword&status=activate_success");
    } else {
      echo "wachtwoorden zijn niet gelijk";
    }    
  } else {
    header("Location: ./index.php?action=createpassword&status=activate_empty&id=".$id);
  }
?>