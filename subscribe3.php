<?php
$servername = "localhost";
$username = "u617208335_stunetdata";
$password = "Stunet@1509";
$dbname = "u617208335_registereddata";

$firstname=$_POST["first-name"];
$lastname=$_POST["last-name"];
$email=$_POST["your_email"];
$phone=$_POST["phone"];
$tech=$_POST["tech"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*$sql = "INSERT INTO userdata (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";*/
$sql = "INSERT INTO userdata (firstname,lastname,email,phone,technology)
VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$tech."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>