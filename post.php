<?php

$usernameError = $passwordError = $password_confirmError = "";
$emailError = $firstnameError = $lastnameError = $address1Error = "";
$cityError = $stateError = $zipcodeError = $address2Error = "";
$phonenumberError = $dobError = $maritalError = $genderError = "";
$username = $firstname = $lastname = $sql = "";
$address1 = $address2 = $city = $state = $zipcode = "";
$phonenumber = $email = $dob = $marital = $gender = "";
$password = $password_confirm = "";
$errorFlag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //username
  if (empty($_POST["username"])) {
    $usernameError = "Username is required";
    $errorFlag = 1;
  }
  else {
    $username = $_POST["username"];

    if (strlen($username) < 6) {
      $usernameError = "Minimum length is 6";
      $errorFlag = 1;
    }
    elseif (strlen($username) > 50) {
      $usernameError = "Max length is 50";
      $errorFlag = 1;
    }
  }

  //password
  if (empty($_POST["password"])) {
    $passwordError = "Password is required";
    $errorFlag = 1;
  }
  else {
    $password = $_POST["password"];

    if (strlen($password) < 8) {
      $usernameError = "Minimum length is 8";
      $errorFlag = 1;
    }
    elseif (strlen($password) > 50) {
      $usernameError = "Max length is 50";
      $errorFlag = 1;
    }

    if(!preg_match("#[A-Z]+#",$password)) {
      $passwordError = "Must Contain At Least 1 uppercase Letter.";
      $errorFlag = 1;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
      $passwordError = "Must Contain At Least 1 lower Letter.";
      $errorFlag = 1;
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
      $passwordError = "Must Contain At Least 1 number.";
      $errorFlag = 1;
    }
    elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$password)) {
      $passwordError = "Must Contain At Least 1 special character.";
      $errorFlag = 1;
    }
  }

  $password_confirm = $_POST["password_confirm"];

  if ($password_confirm != $password) {
    $password_confirmError = "Passwords must match";
    $errorFlag = 1;
  }

  //First Name
  if (empty($_POST["firstname"])) {
    $firstnameError = "firstname is required";
    $errorFlag = 1;
  }
  else {
    $firstname = $_POST["firstname"];

    if (strlen($firstname) > 50) {
      $firstnameError = "Max length is 50";
      $errorFlag = 1;
    }
  }

  //Last Name
  if (empty($_POST["lastname"])) {
    $lastnameError = "lastname is required";
    $errorFlag = 1;
  }
  else {
    $lastname = $_POST["lastname"];

    if (strlen($lastname) > 50) {
      $lastnameError = "Max length is 50";
      $errorFlag = 1;
    }
  }

  //Address1
  if (empty($_POST["address1"])) {
    $address1Error = "Address is required";
    $errorFlag = 1;
  }
  else {
    $address1 = $_POST["address1"];

    if (strlen($address1) > 100) {
      $address1Error = "Max length is 100";
      $errorFlag = 1;
    }
  }

  //Address2
  if (!empty($_POST["address2"])) {
    $address2 = $_POST["address2"];

    if (strlen($address2) > 100) {
      $address2Error = "Max length is 100";
      $errorFlag = 1;
    }
  }

  //city
  if (empty($_POST["city"])) {
    $cityError = "City is required";
    $errorFlag = 1;
  }
  else {
    $city = $_POST["city"];

    if (strlen($city) > 50) {
      $cityError = "Max length is 50";
      $errorFlag = 1;
    }
  }

  //state
  if (empty($_POST["state"])) {
    $stateError = "State is required";
    $errorFlag = 1;
  }
  else {
    $state = $_POST["state"];

    if (strlen($state) > 52) {
      $stateError = "Max length is 50";
      $errorFlag = 1;
    }
  }

  //zipcode
  if (empty($_POST["zipcode"])) {
    $zipcodeError = "Zipcode is required";
    $errorFlag = 1;
  }
  else {
    $zipcode = $_POST["zipcode"];

    if (strlen($zipcode) < 5) {
      $zipcodeError = "Minimum length is 5";
      $errorFlag = 1;
    }
    elseif (strlen($zipcode) > 10) {
      $zipcodeError = "Max length is 10";
      $errorFlag = 1;
    }
  }

  //phonenumber
  if (empty($_POST["phonenumber"])) {
    $phonenumberError = "phonenumber is required";
    $errorFlag = 1;
  }
  else {
    $phonenumber = $_POST["phonenumber"];

    if (strlen($phonenumber) > 12) {
      $phonenumberError = "Max length is 12";
      $errorFlag = 1;
    }
  }

  //dob
  if (empty($_POST["dob"])) {
    $dobError = "dob is required";
    $errorFlag = 1;
  }
  else {
    $dob = $_POST["dob"];
  }

  //marital
  if (empty($_POST["marital"])) {
    $maritalError = "marital is required";
    $errorFlag = 1;
  }
  else {
    $marital = $_POST["marital"];

    if (strlen($marital) > 50) {
      $maritalError = "Max length is 50";
      $errorFlag = 1;
    }
  }

  //gender
  if (empty($_POST["gender"])) {
    $genderError = "gender is required";
    $errorFlag = 1;
  }
  else {
    $gender = $_POST["gender"];

    if (strlen($gender) > 50) {
      $genderError = "Max length is 50";
      $errorFlag = 1;
    }
  }

  //email
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
    $errorFlag = 1;
  }
  else {
    $email = $_POST["email"];
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
      $errorFlag = 1;
    }
  }
}

?>
