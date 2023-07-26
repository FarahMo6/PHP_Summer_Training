<html>
<head>
  <title>Reg Form</title>
  <style>
    table,
    td {
      border: 2px solid black;
      padding: 10px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
      font-weight: bold;
    }
  </style>
</head>
<body>
<?php  
$firstNameErr = "";  
$lastNameErr = "";
$emailErr = "";  
$genderErr = "";  
$skillsErr="";
$countryErr = "";  
$userNameErr="";
$passwordErr="";
$departmentErr = "";
$codeErr = "";

$firstName = "";  
$lastName = "";
$email = "";  
$gender = "";  
$skills  = ""; 
$country = "";  
$userName="";
$password="";
$department = "";
$code = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {  
  if (empty($_GET["firstName"])) {  
    $firstNameErr = "first Name Field is required";  
  } else {  
    $firstName = test_input($_GET["firstName"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {  
      $firstNameErr = "Only letters and white space allowed";  
    }  
  }    
    if (empty($_GET["lastName"])) {  
      $lastNameErr = "Name Field is required";  
    } else {  
      $lastName = test_input($_GET["lastName"]);  
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {  
        $lastNameErr = "Only letters and white space allowed";  
      }  
    }  

    if (empty($_GET["email"])) {  
      $emailErr = "Email field is required";  
    } else {  
      $email = test_input($_GET["email"]);  
      if (!preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/", $email)) {  
        $emailErr = "Invalid email format";  
      }  
    }
 
  if (empty($_GET["gender"])) {  
    $genderErr = "Gender is required";  
  } else {  
    $gender = test_input($_GET["gender"]);  
  }  

  if (empty($_GET["skills"])) {  
    $skillsErr = "Skills is required";  
  } else {  
    $skills = test_input($_GET["skills"]);  
  }  

  if (empty($_GET["country"])) {  
    $countryErr = "country is required";  
  } else {  
    $country = test_input($_GET["country"]);  
  } 

 
    if (empty($_GET["userName"])) {  
      $userNameErr = "userName Field is required";  
    } else {  
      $userName = test_input($_GET["userName"]);  
      if (!preg_match("/^[a-zA-Z-' ]*$/",$userName)) {  
        $userNameErr = "Only letters and white space allowed";  
      }  
    }  

    
      if (empty($_GET["password"])) {  
        $passwordErr = "password Field is required";
      }
    

  if (empty($_GET["department"])) {  
    $departmentErr = "department is required";  
  } else {  
    $department = test_input($_GET["department"]);  
  }

  if (empty($_GET["code"])) {  
    $codeErr = "code is required";  
  } else {  
    $code = test_input($_GET["code"]);  
  } 
}  
?>

  <table>
    <form action="PHPsubmit" method="GET">
      <thead>
        <tr>
          <th colspan="2">Registration Form</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>First Name</td>
          <td>

            <label for="firstName"></label>
            <input type="text" id="fname" name="firstName" maxlength="30" placeholder="First Name" required />

          </td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td>

            <label for="lastName"></label>
            <input type="text" id="lname" name="lastName" maxlength="30" placeholder="Last Name" />

          </td>
        </tr>

        <tr>
          <td>Email Address</td>
          <td>

            <label for="email"></label>
            <input type="text" id="email" name="email" maxlength="30" placeholder="email" />

          </td>
        </tr>

        <tr>
  <td>Country</td>
  <td>
    <select name="country" required>
      <option value=""selected disabled> Select a country</option>
      <option value="USA">USA</option>
      <option value="Canada">Canada</option>
      <option value="Mexico">Mexico</option>
      <option value="Brazil">Brazil</option>
      <option value="Egypt">Egypt</option>
    </select>
  </td>
</tr>
        <tr>
          <td id="gender">Gender</td>
          <td>
            <input type="radio" id="male" name="gender" value = "Male" />
            <label for="male">male</label>
            <br />
            <input type="radio" id="female" name="gender" value = "Female" />
            <label for="female">female</label>

          </td>
        </tr>
        
         
        <tr>
  <td id="skills">Skills</td>
  <td>
    <input type="checkbox" id="PHP" name="skills[]" value="PHP" />
    <label for="PHP">PHP</label>
    <br />
    <input type="checkbox" id="JSE" name="skills[]" value="JSE" />
    <label for="JSE">JSE</label>
    <br />
    <input type="checkbox" id="JEE" name="skills[]" value="JEE" />
    <label for="JEE">JEE</label>
    <br />
    <input type="checkbox" id="Python" name="skills[]" value="Python" />
    <label for="Python">Python</label>
  </td>
</tr>


        <tr>
          <td>User Name</td>
          <td>

            <label for="userName"></label>
            <input type="text" id="userName" name="userName" maxlength="30" placeholder="UserName" required />

          </td>
        </tr>

        <tr>
          <td>Password</td>
          <td>

            <label for="password"></label>
            <input type="password" id="password" name="password" maxlength="30" placeholder="password" />

          </td>
        </tr>


        <tr>
        <td id="department">Department</td>
          <td>
        <select id="department" name="department">
        <option value=""selected disabled> Select a department</option>
  <option value="Development">Development</option>
  <option value="Quality Assurance">Quality Assurance</option>
  <option value="Technical Support">Technical Support</option>
  <option value="IT Operations">IT Operations</option>
</select>
</td>

        



        
<tr>
  <td>Code</td>
  <td>
    <h2 id="codez">Bj5Sikar</h2>
    <label for="code"></label>
    <input type="text" id="codes" name="code" maxlength="30" placeholder="code" />

    <?php
    if (isset($_GET['codez'])) {
      $code = $_GET['codez'];

      if ($code == 'Bj5Sikar') {
        echo "Bj5Sikar";
      }
    }
    ?>

  </td>
</tr>



        
        <tr>
          <th colspan="2">

            <input type="submit" name="id">
            <input type="reset" name="id">

          </th>
        </tr>
      </tbody>
    </form>
  </table>
</body>

</html>


</body>


</html>