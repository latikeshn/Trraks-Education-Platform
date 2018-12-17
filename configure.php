<?php 
$servername = "localhost";
$password = "";
$username = "root";
$database_name = "profileevaluator";

$conn = new mysqli($servername,$username,$password,$database_name)
or die("Connection failed: " . $conn->connect_error);
// echo "success";
?>