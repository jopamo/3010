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
            <a class="navbar-brand" href="#">3010-p4</a>
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
                          <input type="radio" id="nonbinary" value="nonbinary" name="gender" />NonBinary
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
