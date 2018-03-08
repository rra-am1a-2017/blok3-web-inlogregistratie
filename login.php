<?php
  // Kijk of de velden zijn ingevuld.
  if (!empty($_POST["email"]) && !empty($_POST["password"])) {

  } else {
    header("Location: ./index.php?action=loginform&status=emptyfields");
  }


?>