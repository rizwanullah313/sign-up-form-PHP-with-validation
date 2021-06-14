<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SignUp Form</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
 
<style>
td,th{
	padding:10px;
}
button{
width:100%;	
}
th{
	text-align:center;	
}
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>

<!--- Body    --->
<body>
<br /><br /><br /><br />
<form method="post" action="signup.php">
<table border="1 solid black" cellpadding="0" cellspacing="0" align="center">
<th colspan="2">Sign Form</th>
<tr><td>First Name</td><td><input type="text" Placeholder="      First Name" data-toggle="tooltip"  data-placement="right" title="Enter Your First Name!" required="" name="fname" id="fname" maxlength="15" /></td></tr>
<tr><td>Last Name</td><td><input type="text" Placeholder="      Last Name" data-toggle="tooltip"  data-placement="right" title="Enter Your Last Name!" required="" name="lname" id="lname" maxlength="15" /></td></tr>
<tr><td>Email Address</td><td><input type="email" Placeholder="      Email Address" required="" name="email" id="email" data-toggle="tooltip"  data-placement="right" title="Enter Your Valid Email!" /></td></tr>
<tr><td>Password</td><td><input type="password" Placeholder="      Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></td></tr>
<tr><td>Confirm Password</td><td><input type="password" Placeholder="      Confirm Password" required="" name="con_password" id="con_password" /></td></tr>
<tr><td colspan="2"><button type="submit"class="btn-primary" name="sign_up">SingUp</button></td></tr>
</table>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
 <script>
       $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip();
           });
             </script>
             
             <script>
			 function myfunction()
			 {
			 var fname = document.getElementById("fname");
			 var lname = document.getElementById("lname");
             var email = document.getElementById("email");
			 if(num=="")
			 {
				 alert("Please Enter Your First Name!!!!");
			 }
              if(num2=="")
			 {
				 alert("Please Enter Your Last Name!!!!");
			 }
              if(num1=="")
			 {
				 alert("Please Enter your Valid Email Address!!!!");
			 }
			 }
			 </script>
           <script>
var myInput = document.getElementById("password");
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
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</form>
</body>
</html>