<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'devi');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$number=$_POST['number'];


$s ="Insert into log1 values('$name','$email','$password','$number')";

$result = $conn->query($s);
if($result){
    echo"Signup success";
    header('location: login.php');
}
else{
    echo"invalid";
}
?>