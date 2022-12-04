<?php

// insert
  try {
    $pdo->beginTransaction();

    // insert statement
    $insert_sql  = "INSERT INTO $db_table (userName, password , firstName, lastName, address1,
      address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
      VALUES(:username, :password, :firstname, :lastname, :address1, :address2, :city, :state,
      :zipcode, :phonenumber, :email, :gender, :marital, :dob)";
    $insert = $pdo->prepare($insert_sql);
    $insert->bindValue(':username', $username);
    $insert->bindValue(':password', $password);
    $insert->bindValue(':firstname', $firstname);
    $insert->bindValue(':lastname', $lastname);
    $insert->bindValue(':address1', $address1);
    $insert->bindValue(':address2', $address2);
    $insert->bindValue(':city', $city);
    $insert->bindValue(':state', $state);
    $insert->bindValue(':zipcode', $zipcode);
    $insert->bindValue(':phonenumber', $phonenumber);
    $insert->bindValue(':email', $email);
    $insert->bindValue(':gender', $gender);
    $insert->bindValue(':marital', $marital);
    $insert->bindValue(':dob', date($dob));

    if ($insert->execute() === FALSE) {
      $pdo->rollback();
      echo 'Unable to insert data';
      echo "<br>";
    }
    else {
      $last_insert_id = $pdo->lastInsertId();
      echo 'Last Insert ID: '.$last_insert_id;
      echo "<br>";
      $pdo->commit();
    }

  } catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
  }
  
?>
