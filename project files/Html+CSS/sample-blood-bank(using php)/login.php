<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>

        <p class="submit"><input type="submit" name="commit" value="Login"></p>


        <?php
    $host="localhost"; // Host name
    $username=""; // MySQL username
    $password=""; // MySQL password
    $db_name=""; // Database name
    $tbl_name="members"; // Table name

    // Connect to the server and select a database.
    mysql_connect("$host", "$username", "$password") or die("cannot connect");
    mysql_select_db("$db_name") or die("cannot select DB");

    // Username and password sent from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    $sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
    $result = mysql_query($sql);

    // Mysql_num_row is counting the table rows
    $count=mysql_num_rows($result);

    // If the result matched $username and $password, the table row must be one row
    if($count == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
    }
      </form>
    </div>
</body>
</html>