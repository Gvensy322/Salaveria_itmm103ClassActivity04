<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
</head>
<body>

<form name="reg" action="dashboard.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
        </div></td>
      </tr>

      <tr>
        <td width="95"><div align="right">Username:</div></td>
        <td width="171"><input type="text" name="username" /></td>
      </tr>
      
      <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="text" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></td>
      </tr>
      <tr>
        <td><div align="right">Confirm Password:</div></td>
        <td><input type="text" name="confirmpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></td>
      </tr>
      <tr>
        <td><div align="right">Email Address:</div></td>
        <td><input type="text" name="email" pattern=".{@}" title="Must contain @ "/ ></td>
      </tr>
      <tr>
        <td><div align="right">Confirm Email Address:</div></td>
        <td><input type="text" name="confirmemail" pattern=".{@}" title="Must contain @ " /></td>
      </tr>
      <tr>
        <td><div align="right">Contact Number:</div></td>
        <td><input type="text" name="contact" pattern=".{11}" title="Must only contain at least 11 digits"/></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" ></td>
      </tr>
    </table>
  </form>

  
        
<script>
var myInput = document.getElementById("password");
var myInput = document.getElementById("confirmpass");
var myInput = document.getElementById("email");
var myInput = document.getElementById("confirmemail");
var myInput = document.getElementById("contact")

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 6) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>