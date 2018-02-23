<?php
 //var_dump($_POST);
  // echo "test isset: " . isset($_POST["conditions"]);
  // We gaan contact maken in de code met de mysql database
  // echo "Empty: " . empty($_POST["email"]);
  // echo "isset: " . isset($_POST["email"]);
  // exit();

  include("./connect_db.php");
  include("./functions/functions.php");
  
  if (empty($_POST["email"])) {
    header("Location: ./index.php?action=registerform&status=emailempty");
  } else {  

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
        header("Location: ./index.php?action=registerform&status=emailexists");
      } 
      else 
      {
        // Dit is de query die de ingevulde gegevens kan wegschrijven naar de tabel users
        $sql = "INSERT INTO `login` (`id`,
                                    `email`,
                                    `conditions`,
                                    `userrole`,
                                    `password`,
                                    `activated`)
                            VALUES  (NULL, 
                                    '" . $email ."', 
                                    '" . $conditions . "',
                                    'subscriber',
                                    '',
                                    'no');";

        // echo $sql; exit();
        mysqli_query($conn, $sql);

        // We vragen het aangemaakte (autonummering) id op via de php functie... 
        $id = mysqli_insert_id($conn);

        // Hier versturen we de e-mail

        $subject = "Registratie www.dyslectie.nl";

        $message = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <meta http-equiv="X-UA-Compatible" content="ie=edge">
                      <title>Document</title>
                      <style>
                        body {
                          background-color: "rgb(220,220,220)";
                        }
                        p {
                          color: "green";
                        }
                      </style>
                    </head>
                    <body>
                      <h3>Beste bezoeker van de site,</h3>
                      <p>bedankt voor het registreren. klik <a href="http://www.inlogregistratiesysteem.am1a.nl/index.php?action=createpassword&status=createpassword&id=' . $id . '">hier</a> voor het activeren van uw account.</p>
                      <p>Met vriendelijke groet,</p>
                      <p>De beheerder van uw site</p>
                    </body>
                    </html>';

        $headers = "Content-Type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: superadmin@dyslectie.nl \r\n";
        $headers .= "Cc: administrator@dyslectie.nl, adruijter@gmail.com \r\n";
        $headers .= "Bcc: belastingdienst.nl";

        mail($email, $subject, $message, $headers);       
        
        header("Location: ./index.php?action=registerform&status=success");
      }  
    }
    else {
      // Niet aangevinkt...
      header("Location: ./index.php?action=registerform&status=nocheck");
    }
}
?>