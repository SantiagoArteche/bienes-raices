<?php 

require "./includes/config/database.php";

$db = connectDB();

$name = "Simon";

$email = "simonarteche@hotmail.com";

$password = password_hash("123456" , PASSWORD_BCRYPT);

$query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password');";

$response = mysqli_query($db, $query); 


?>