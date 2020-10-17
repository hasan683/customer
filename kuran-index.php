<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['sura,s_name'];
$sura,s_ayat_no = $_POST['sura,s_ayat_no'];
$sura,s_type = $_POST['sura,s_type'];
$sql = "UPDATE al_kuran SET name='$sura,s_name', sura,s_ayat_no='$sura,s_ayat_no', sura,s_type='$sura,s_type' WHERE id=$id"; 

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/crude/");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>