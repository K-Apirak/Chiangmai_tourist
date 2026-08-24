<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cmidb";

// Create connection
$conn = mysqli_connect(
 hostname: $servername,
 username: $username,
 password: $password,
 database : $db
);
// Check connection
if (!$conn){
 die("connect Failed". mysqli_connect_error());
}
else{
}

?>