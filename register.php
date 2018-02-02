<?php
  // var_dump($_POST);
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");
  include("./functions/functions.php");  
  $email       = sanitize($_POST["email"]);
  $conditions  = sanitize($_POST["conditions"]);

  // We gaan checken in de database of het ingevoerde emailadres al bestaat in de database
  $sql = "SELECT * FROM `login` WHERE `email` = '" . $email . "'";

  $result = mysqli_query($conn, $sql);

  if ( mysqli_num_rows($result)) {
    // Hier moet een redirect komen naar de index.html pagina
  } 
  else {
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
      header("Location: ./index.html");
  }
  

  




  
  
?>