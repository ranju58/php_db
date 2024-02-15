<?php
$servername="localhost";
$username= "root";
$password= "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
echo"Connection Successful";
$sql = "CREATE DATABASE mydb";
if($conn->query($sql)==TRUE) {
    echo "Database created successfully";
}
else {
    echo "Failed to create database". $conn->connect_error;

}
$conn->close() ;
 ?>
