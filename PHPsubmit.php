<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="phpStyling.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
  <div class="container">
    <h1>Form Submission</h1>
    <hr>
    <?php
      // Sanitize the form data
      $firstName = ($_GET["firstName"]);  
        $lastName = ($_GET["lastName"]);
        $email = ($_GET["email"]);
        $gender = ($_GET["gender"]);
        $skills  = ($_GET["skills"]);
        $country = ($_GET["country"]);
        $userName= ($_GET["userName"]);
        $password= ($_GET["password"]);
        $department = ($_GET["department"]);
        $code = ($_GET["code"]);

      // Display the form data
      echo "<div class='success-message'>Thanks " . ($gender == 'Female' ? "Mrs. " : "Mr. ") . "$firstName $lastName!</div>";
      echo "<p class='form-data'><label>First Name:</label><p>$firstName</p></p>";
      echo "<p class='form-data'><label>Last Name:</label><p>$lastName</p></p>";
      echo "<p class='form-data'><label>Email Address:</label><p>$email</p></p>";
      echo "<p class='form-data'><label>Gender:</label><p>$gender</p></p>";
      echo "<p class='form-data'><label>Department:</label><p>$department</p></p>";
      echo "<p class='form-data'><label>Skills:</label><p>" . implode(", ", $skills) . "</p></p>";
      echo "<p class='form-data'><label>Country:</label><p>$country</p></p>";
      echo "<p class='form-data'><label>User Name:</label><p>$userName</p></p>";
      echo "<p class='form-data'><label>Password:</label><p>$password</p></p>";
      if ($code == 'Bj5Sikar') {
        echo "<div class='success-message'>$code is Valid</div>";
      } else {
        echo "<div class='error-message'>$code is Not Valid</div>";
      }
    ?>
  </div>
</body>
</html>
