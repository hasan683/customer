<!DOCTYPE HTML>
<html>  
<body>

<form action="insert.php" method="post">
Name: <input type="text" name="name"><br>
phone: <input type="text" name="phone"><br>
address: <input type="text" name="address"><br>
email: <input type="text" name="email"><br>
father name: <input type="text" name="father_name"><br>
occupation: <input type="text" name="occupation"><br>
blood group: <label for="O+">O+</label><input type="radio" value="O+" name="blood_group">
             <label for="O-">O-</label><input type="radio" value="O-" name="blood_group">
             <label for="A+">A+</label><input type="radio" value="A+" name="blood_group">
             <label for="B+">B+</label><input type="radio" value="B+" name="blood_group">
             <label for="AB+">AB+</label><input type="radio" value="AB+" name="blood_group">
             <label for="AB-">AB-</label><input type="radio" value="AB-" name="blood_group"><br>


gender: <label for="male">male</label><input type="radio"  value="male" name="gender">
       <label for="female">female</label><input type="radio" value="female" name="gender">
       <label for="Others">Others</label><input type="radio" value="Others" name="gender"><br>
<input type="submit">
</form>

</body>
</html>