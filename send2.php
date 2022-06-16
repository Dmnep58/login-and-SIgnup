<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'devi');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$textarea=$_POST['textarea'];


$s ="Insert into log2 values('$name','$email','$subject','$textarea')";

$result = $conn->query($s);

?>