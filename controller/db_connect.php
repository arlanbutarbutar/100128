<?php 
$conn=mysqli_connect("localhost","root","","wikisuku");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
