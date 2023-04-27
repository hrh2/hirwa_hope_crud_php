<?php
$servername='localhost';
$username='root';
$password='';
$db='students_db';
$connection=mysqli_connect($servername,$username,$password,$db);
if(!$connection){
    echo"<h1>Connection with the Database </h1>";
}
// else{
//      echo"<h1>Database Successfully connected !!!</h1>";
//  };
?>