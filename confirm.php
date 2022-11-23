<?php

$usernameError = $passwordError = $password_confirmError = "";
$emailError = $firstnameError = $lastnameError = $address1Error = "";
$cityError = $stateError = $zipcodeError = $address2Error = "";
$phonenumberError = $dobError = $maritalError = $genderError = "";
$username = $firstname = $lastname = "";
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Sample Home Page</title>

    <link rel="stylesheet" href="css/main.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  </head>
  <body style="background-color:#022f57;">
  <body>
    <div id="header">
      <a id="logo" href="index.html">
        <img src="banner.png" alt="" />
      </a>
    </div>
    <div id="left">
      <nav class="fill">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">3010-p1</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="reg.php">Registration</a></li>
            <li><a href="anime.html">Animations</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div id="main">
            <div id="content">
              <h1 class="animate__animated animate__bounce">Registration</h1>
            </div>
<?php if ($errorFlag === 1) { ?>
            <!--Section: Contact v.2-->
            <section class="mb-4">
              <div class="row">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                  <form action ="confirm.php" method="post">
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="username" name="username"
                            value="<?php echo $username; ?>"
                            placeholder="Create a username."
                            class="form-control" />
                            <span class="error"> <?php echo $usernameError;?></span>
                            <label for="username" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="password" id="password"
                          placeholder="Create a password."
                          name="password" class="form-control"/>
                          <span class="error"> <?php echo $passwordError;?></span>
                          <label for="password" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="password" id="password_confirm"
                          placeholder="Confirm password"
                          name="password_confirm" class="form-control" />
                          <span class="error"> <?php echo $password_confirmError;?></span>
                          <label for="password_confirm" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="firstname" name="firstname"
                          value="<?php echo $firstname; ?>"
                          placeholder="First Name"
                          class="form-control" />
                          <span class="error"> <?php echo $firstnameError;?></span>
                          <label for="firstname" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="lastname" name="lastname"
                          value="<?php echo $lastname; ?>"
                          placeholder="Last Name"
                          class="form-control" />
                          <span class="error"> <?php echo $lastnameError;?></span>
                          <label for="lastname" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="address1" name="address1"
                          value="<?php echo $address1; ?>"
                          placeholder="Address"
                          class="form-control" />
                          <span class="error"> <?php echo $address1Error;?></span>
                          <label for="address1" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="address2" name="address2"
                          value="<?php echo $address2; ?>"
                          placeholder="Address continued"
                          class="form-control" />
                          <span class="error"> <?php echo $address2Error;?></span>
                          <label for="address2" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="city" name="city"
                          value="<?php echo $city; ?>"
                          placeholder="City"
                          class="form-control" />
                          <span class="error"> <?php echo $cityError;?></span>
                          <label for="city" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <select class="form-control"
                            id="state" name="state">
                            <option value="" selected="selected"
                            hidden="hidden" disabled="disabled">
                            --Please Select--
                            </option>
                            <option value="AK">Alaska</option>
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="AZ">Arizona</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DC">District of Columbia</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="IA">Iowa</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MD">Maryland</option>
                            <option value="ME">Maine</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MO">Missouri</option>
                            <option value="MS">Mississippi</option>
                            <option value="MT">Montana</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="NE">Nebraska</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NV">Nevada</option>
                            <option value="NY">New York</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VA">Virginia</option>
                            <option value="VT">Vermont</option>
                            <option value="WA">Washington</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WV">West Virginia</option>
                            <option value="WY">Wyoming</option>
                          </select>
                          <span class="error"> <?php echo $stateError;?></span>
                          <label for="state" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="zipcode" name="zipcode"
                          value="<?php echo $zipcode; ?>"
                          placeholder="Zipcode"
                          class="form-control" />
                          <span class="error"> <?php echo $zipcodeError;?></span>
                          <label for="zipcode" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input id="phonenumber" name="phonenumber"
                          value="<?php echo $phonenumber; ?>"
                          placeholder="Phone number"
                          class="form-control" />
                          <span class="error"> <?php echo $phonenumberError;?></span>
                          <label for="phoneNumber" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="email" name="email"
                          value="<?php echo $email; ?>"
                          placeholder="email"
                          class="form-control" />
                          <span class="error"> <?php echo $emailError;?></span>
                          <label for="email" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="dob" name="dob"
                          value="<?php echo $dob; ?>"
                          placeholder="Date of Birth"
                          onfocus="(this.type='date')"
                          class="form-control" />
                          <span class="error"> <?php echo $dobError;?></span>
                          <label for="dob" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="marital" class="">Marital Status: </label>
                          <br>
                          <input type="radio" id="single" value="single" name="marital" />Single
                          <input type="radio" id="married" value="married" name="marital" />Married
                          <span class="error"> <?php echo $maritalError;?></span>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="gender" class="">Gender: </label>
                          <br>
                          <input type="radio" id="female" value="female" name="gender" />Female
                          <input type="radio" id="male" value="male" name="gender" />Male
                          <span class="error"> <?php echo $genderError;?></span>
                        </div>
                      </div>
                      <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <input type="hidden" id="errorFlag" name="errorFlag" value="errorFlag" />
                    <input type="submit" class="btn btn-success" value="Submit" name="submit">
                <input type="reset" class="btn btn-info" value="Reset">
                    <br><br>
                  </form>

                  <div class="status"></div>
                </div>
                <!--Grid column-->
              </div>
            </section>
            <!--Section: Contact v.2-->
<?php } else {

  echo "<h2>Your Input:</h2>";
  echo 'First Name: ' . $_POST["firstname"] . '<br>';
  echo 'Last Name: ' . $_POST["lastname"] . '<br>';
  echo 'username: ' . $_POST["username"] . '<br>';
  echo 'address1: ' . $_POST["address1"] . '<br>';
  echo 'address2: ' . $_POST["address2"] . '<br>';
  echo 'city: ' . $_POST["city"] . '<br>';
  echo 'state: ' . $_POST["state"] . '<br>';
  echo 'zipcode: ' . $_POST["zipcode"] . '<br>';
  echo 'phonenumber: ' . $_POST["phonenumber"] . '<br>';
  echo 'email: ' . $_POST["email"] . '<br>';
  echo 'dob: ' . $_POST["dob"] . '<br>';
  echo "<br><br><br>";

  } ?>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
  <footer class="footer">
    <div id="footer" class="container text-center">
      <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
      <a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
    </div>
    </footer>
  <div class="question-template clearfix">
</html>
