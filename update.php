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
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$father_name = $_POST['father_name'];
$occupation = $_POST['occupation'];
$blood_group = $_POST['blood_group'];
$gender = $_POST['gender'];
$sql = "UPDATE customer SET name='$name',phone='$phone',address='$address',email='$email',father_name='$father_name',occupation='$occupation',blood_group='$blood_group',gender='$gender' WHERE id='$id'"; 

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/customer/");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>