<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "business";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name = "'".$_POST['name']."'";
$phone = "'".$_POST['phone']."'";
$address = "'".$_POST['address']."'";
$email = "'".$_POST['email']."'";
$father_name = "'".$_POST['father_name']."'";
$occupation = "'".$_POST['occupation']."'";
$blood_group = "'".$_POST['blood_group']."'";
$gender = "'".$_POST['gender']."'";
$sql = "INSERT INTO customer(name,phone,address,email,father_name,occupation,blood_group,gender)
VALUES ($name,$phone,$address,$email,$father_name,$occupation,$blood_group,$gender)";
if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/customer/");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>