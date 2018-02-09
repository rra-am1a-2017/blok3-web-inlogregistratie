<?php
  // var_dump($_POST);
  // echo "test isset: " . isset($_POST["conditions"]);
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");
  include("./functions/functions.php"); 

  if (isset($_POST["conditions"])) {
    $conditions  = sanitize($_POST["conditions"]);
  } 
  else {
    $conditions = false;
  }
   
  $email       = sanitize($_POST["email"]);
  

  if ($conditions) {
    // We gaan checken in de database of het ingevoerde emailadres al bestaat in de database
    $sql = "SELECT * FROM `login` WHERE `email` = '" . $email . "'";

    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result)) {
      header("Location: ./index.php?status=emailexists");
    } 
    else 
    {
      // Dit is de query die de ingevulde gegevens kan wegschrijven naar de tabel users
      $sql = "INSERT INTO `login` (`id`,
                                  `email`,
                                  `conditions`,
                                  `userrole`)
                          VALUES  (NULL, 
                                  '" . $email ."', 
                                  '" . $conditions . "',
                                  'subscriber');";

      // echo $sql; exit();
      mysqli_query($conn, $sql);
      header("Location: ./index.php?status=success");
    }  
  }
  else {
    // Niet aangevinkt...
    header("Location: ./index.php?status=nocheck");
  }
?>