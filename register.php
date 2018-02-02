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
      // Hier moet een redirect komen naar de index.html pagina
      echo "Kies een ander emailadres.";
      header("Refresh:4; url=./index.html");
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
      echo "Uw registratie is geslaagd. U krijgt een email toegestuurd met een activatielink";
      header("Refresh:2; ./index.html");
    }  
  }
  else {
    echo "U heeft de algemene voorwaarden niet aangevinkt";
    header("Refresh:2; url=./index.html");
  }
?>