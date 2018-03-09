<?php
  echo '<a href="./index.php?action=home">Startpagina</a> | ';
  
  if (isset($_SESSION["id"])) {
    echo '<a href="./index.php?action=games">Spelletjes</a> | ';

    switch ($_SESSION["userrole"]) {
      case "subscriber":
        echo '<a href="./index.php?action=games">Spelletjes</a> | ';        
        break;
      case "administrator":
        echo '<a href="./index.php?action=userprogress">Voortgang gebruikers</a> | ';        
        break;
      case "superadmin":
        echo '<a href="./index.php?action=changeuserrole">Gebruikerrollen</a> | ';        
        break;
      default:
        header("Location: ./logout.php");            
        break; 
    }
    
    echo '<a href="./logout.php">Uitloggen</a> | ';
  } else {
    echo '<a href="./index.php?action=registerform&status=registerform">Registreer</a> | ';
    echo '<a href="./index.php?action=loginform&status=loginform">Inloggen</a> | ';
  }
?>