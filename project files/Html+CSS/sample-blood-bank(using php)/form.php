<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BLOOD BANK</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <style type="text/css">
  	{
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
  </style>
</head>
<body>
	<?php 
            $fname = $lname = $gname = $group = $address = $email = $psw = $pswrepeat = "";
              if($_SERVER["REQUEST_METHOD"] == "POST")
              {
            	$fname = val($_POST["fname"]);
            	$lname = val($_POST["lname"]);
            	$gname = val($_POST["gname"]);
            	$group = val($_POST["group"]);
            	$address = val($_POST["address"]);
            	$email= val($_POST["email"]);
            	$psw = val($_POST["psw"]);
            	$pswrepeat= val($_POST["pswrepeat"]);
            }

            function val($data) {
            	$data= trim($data);
            	$data= stripslashes($data);
            	$data= htmlspecialchars($data);
            	return $data;
            }
	?>
	<form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="container">
    <h1><b>Receiver Registration Form</b></h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
       <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First name" name="fname" maxlength="50" id="fname" required>
 <label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="lname" maxlength="50" id="lname" required>

 <label for="Guardian's Name"><b>Guardian's Name</b></label>
    <input type="text" placeholder="Enter Guardian's Name" name="gname" maxlength="50" id="gname" required>
    <br><br>

   <label for="Blood Group"><b>Blood Group</b></label> &emsp;
    
    <br><br><br> <label for="address"><b>Address</b></label>
<input type="text" placeholder="Enter address" name="address" id="address" required>

    <label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat" required>
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Log in</a></p>
  </div>
</form>
<?php
echo "user input: <br>";

echo "name <br>".$fname;

echo "name <br>".$lname;
echo "name <br>".$gname;
echo "name <br>".$group;
echo "name <br>".$address;
echo "name <br>".$email;
echo "name <br>".$psw;
echo "name <br>".$pswrepeat;

?>
	</body>
	</html>