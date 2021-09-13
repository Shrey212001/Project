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
}s
  </style>
</head>
<body>
  <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Blood_drop.svg" height="50px" width="50px"/>
      <a href="index.php"><span class="ml-3 text-xl">BLOOD BANK</span></a>
    </a>
     <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

    </nav> 
    <div><a href="login.php"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">LogIn
      <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg> -->
    </button></a></div>
  </div>
</header>
  <?php 
            $hname = $dname = $address = $email = $psw = $pswrepeat = "";
              if($_SERVER["REQUEST_METHOD"] == "POST")
              {
              $fname = val($_POST["hname"]);
              $lname = val($_POST["dname"]);
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
    <h1><b>Hospital Registration Form</b></h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
       <label for="Hospital Name"><b>Hospital Name</b></label>
    <input type="text" placeholder="Enter Hospital name" name="hname" maxlength="50" id="hname" required>

 <label for="Department"><b>Department</b></label>
    <input type="text" placeholder="Enter Department" name="dname" maxlength="50" id="dname" required>
    <!-- <br><br> -->
 <label for="address"><b>Address</b></label>
<input type="text" placeholder="Enter address" name="address" id="address" required>

    <label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat" required>
    <hr>
    <a href="hospital.php"><button type="submit" class="registerbtn">Register</button></a>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Log in</a></p>
  </div>
</form>

  </body>
  </html>