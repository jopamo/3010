<?php

  //Create Connection
  $dsn = "mysql:host=localhost;dbname=project";
  $db_user = "root";
  $db_password = "";

  try {
    // set connection info
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo 'Database Error '.$e->getMessage().' in '.$e->getFile().
      ': '.$e->getLine();
  }

?>
