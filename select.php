<?php
// select
  try {
    //SELECT one row
    $select = $pdo->prepare("SELECT * FROM `registration` WHERE `id` = :id LIMIT 1;");
    $select->bindValue(':id', $last_insert_id);
    $select->execute();
    $row = $select->fetch(PDO::FETCH_ASSOC);

    if($row === false){
      echo $last_insert_id . ' not found!';
      echo "<br>";
    } else{
      echo $last_insert_id . ' selected and fetched!';
      echo "<br>";
    }

    echo "<h2>Your Input:</h2>";
    echo 'First Name: ' . $row["firstName"] . '<br>';
    echo 'Last Name: ' . $row["lastName"] . '<br>';
    echo 'username: ' . $row["userName"] . '<br>';
    echo 'address1: ' . $row["address1"] . '<br>';
    echo 'address2: ' . $row["address2"] . '<br>';
    echo 'city: ' . $row["city"] . '<br>';
    echo 'state: ' . $row["state"] . '<br>';
    echo 'zipcode: ' . $row["zipCode"] . '<br>';
    echo 'phonenumber: ' . $row["phone"] . '<br>';
    echo 'email: ' . $row["email"] . '<br>';
    echo 'dob: ' . $row["dateOfBirth"] . '<br>';
    echo "<br><br><br>";

  } catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
  }
?>
