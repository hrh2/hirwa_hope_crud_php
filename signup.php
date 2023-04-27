<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
    $password=sha1($_POST['password']);
    $gender=$_POST['gender'];
    $sql="INSERT INTO users(fname,lname,email,password,gender) VALUES('$firstName','$lastName','$email','$password','$gender')";
    $result=$connection->query($sql);
    if($result==true){
        echo "New record created Successfully";
    }else{
        echo "Error:".$sql."<br>".$connection->error;
        echo "Records not recorded";
    }
    $connection->close();
};
?>
<html>
    <head>
        <title>confirmation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<a class='btn btn-info' href="signin.html">Back to login</a>
<a class='btn btn-info' href="read.php">view records from database</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>