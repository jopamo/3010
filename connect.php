<?php

  //Create Connection
  $dsn = "mysql:host=localhost;dbname=$db_name";

  try {
    // set connection info
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo 'Database Error '.$e->getMessage().' in '.$e->getFile().
      ': '.$e->getLine();
  }

?>
