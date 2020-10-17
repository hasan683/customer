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
$id = $_GET['id'];
$sql = "SELECT id,name,phone,address,email,father_name,occupation,blood_group,gender FROM customer where id =$id";
$result = $conn->query($sql);


$conn->close();
?>
<!DOCTYPE HTML>
<html>  
<body>

  <?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  ?>

<form action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
Name: <input type="text" value="<?php echo $row["name"] ?>" name="name"><br>
phone: <input type="text" value="<?php echo $row["phone"] ?>" name="phone"><br>
address: <input type="text" value="<?php echo $row["address"] ?>" name="address"><br>
email: <input type="text" value="<?php echo $row["email"] ?>" name="email"><br>
father name: <input type="text" value="<?php echo $row["father_name"] ?>" name="father_name"><br>
occupation: <input type="text" value="<?php echo $row["occupation"] ?>" name="occupation"><br>
blood group:<label for="O+">O+</label> <input type="radio" value="O+" <?php echo ($row["blood_group"]=='O+')?'checked':'' ?> name="blood_group">
            <label for="O-">O-</label> <input type="radio" value="O-" <?php echo ($row["blood_group"]=='O-')?'checked':'' ?> name="blood_group">
            <label for="A+">A+</label> <input type="radio" value="A+" <?php echo ($row["blood_group"]=='A+')?'checked':'' ?> name="blood_group">
            <label for="B+">B+</label> <input type="radio" value="B+" <?php echo ($row["blood_group"]=='B+')?'checked':'' ?> name="blood_group">
            <label for="AB+">AB+</label> <input type="radio" value="AB+" <?php echo ($row["blood_group"]=='AB+')?'checked':'' ?> name="blood_group">
            <label for="AB-">AB-</label> <input type="radio" value="AB-" <?php echo ($row["blood_group"]=='AB-')?'checked':'' ?> name="blood_group"><br>

gender:<label for="male">male</label> <input type="radio" value="male" <?php echo ($row["gender"]=='male')?'checked':'' ?> name="gender">
       <label for="female">female</label> <input type="radio" value="female"  <?php echo ($row["gender"]=='female')?'checked':'' ?> name="gender">
       <label for="Others">Others</label> <input type="radio" value="Others" <?php echo ($row["gender"]=='Others')?'checked':'' ?> name="gender"><br>
<input type="submit">
</form>

<?php   }
} ?>

</body>
</html>