<?php
$servername='localhost';
$username='root';
$password='';
$db='students_db';
$connection=mysqli_connect($servername,$username,$password,$db);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>