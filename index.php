

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

$sql = "SELECT id,name,phone,address,email,father_name,occupation,blood_group,gender from customer";
$result = $conn->query($sql);


$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
<style>
*{
margin:0 auto;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: DodgerBlue;
  color:#f8f8f8;
}
h2{
text-align: center;
margin-top:20px;
margin-bottom:20px;
}
</style>
</head>
<body>

<a href="form.php">add</a>

<h2>PERSON LIST</h2>

<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>phone</th> 
	<th>address</th>
	<th>email</th>
	<th>father name</th> 
	<th>occupation</th>
	<th>blood group</th>
	<th>gender</th>
  </tr>
  
  <?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  ?>
   
 
  <tr>
    <td><?php echo $row["id"] ?></td>
    <td><?php echo $row["name"] ?></td>
	<td><?php echo $row["phone"] ?></td>
	<td><?php echo $row["address"] ?></td>
	<td><?php echo $row["email"] ?></td>
	<td><?php echo $row["father_name"] ?></td>
	<td><?php echo $row["occupation"] ?></td>
	<td><?php echo $row["blood_group"] ?></td>
	<td><?php echo $row["gender"] ?></td>
	<td><a href="edit.php?id=<?php echo $row["id"] ?>">edit</a> <a href="delete.php?id=<?php echo $row["id"] ?>">delete</a></td>
  </tr>
  
<?php   }
} ?>
  
</table>

</body>
</html>