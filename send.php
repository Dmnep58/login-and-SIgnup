<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'devi');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email= $_POST['email'];
$password= $_POST['password'];


$s ="select * from log1 where email ='$email' And password='$password'";

$result = $conn->query($s);
if($result->fetch_assoc()){
    header('location: https://www.google.com');
}
else{
    header('location: login.php?msg=info wrong');
}
?>