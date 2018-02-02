<?php
  function sanitize($data) {
    // Het weghalen van alle spaties links en rechts van de string en meerdere spaties in het midden
    $data = trim($data); 
    // addslashes escaped (onschadelijk maken) een enkele quote', een dubbele quote " en 
    // backslashes \
    $data = addslashes($data);
    // Deze functie zet alle html characters om naar html entities
    $data = htmlspecialchars($data);
    return $data;
  }
?>