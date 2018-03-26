<?php
  include("./connect_db.php");
  include("./functions/functions.php");

  //var_dump($_POST);

  $id = sanitize($_POST["id"]);
  $userrole = sanitize($_POST["userrole"]);

  $sql = "UPDATE `login` SET `userrole` = '{$userrole}' WHERE `id` = {$id}";
  //echo $sql; exit;
  mysqli_query($conn, $sql);

  header("Location: ./index.php?action=changeuserrole");
?>