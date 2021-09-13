<?php
$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id, firstname, lastname, guardianname, bloodgroup, address, email, date FROM users";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "ID: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "  " . $row["guardianname"]."BloodGroup: " . $row["bloodgroup"]. " - address: " . $row["address"]." - email".$row["email"]. "<br>";
    }
} else {
    echo "<br> Successfully Added to database";
}

$conn->close();
?>
