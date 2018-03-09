<?php
  // Kijk of de velden zijn ingevuld.
  if (!empty($_POST["email"]) && !empty($_POST["password"])) {

    // Maak de sanitize functie beschikbaar
    include("./functions/functions.php");

    // Maak contact met de mysql-server
    include("./connect_db.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    $sql = "SELECT * FROM `login` WHERE `email` = '{$email}'";

    $result = mysqli_query($conn, $sql);



    if ( mysqli_num_rows($result)) {

      $record = mysqli_fetch_array($result);

      if (password_verify($password, $record["password"])) {
        //ga verder met inlogprocedure
      } else {
        header("Location: ./index.php?action=loginform&status=accessdenied");        
      }

    } else {
      header("Location: ./index.php?action=loginform&status=accessdenied");
    }

  } else {
    header("Location: ./index.php?action=loginform&status=emptyfields");
  }


?>