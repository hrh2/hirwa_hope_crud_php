<?php
include 'connection.php';

function add_users($connection_db) {
    if(isset($_POST['submit'])){
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
    $password=sha1($_POST['password']);
    $gender=$_POST['gender'];
    $sql="INSERT INTO users(fname,lname,email,password,gender) VALUES('$firstName','$lastName','$email','$password','$gender')";
    $result=$connection_db->query($sql);
    if($result==true){
        echo "New record created Successfully";
    }else{
        echo "Error:".$sql."<br>".$connection_db->error;
        echo "Records not recorded";
    }
  };
}

// Function to get all users
function get_users($connection){
    $sql = "SELECT * FROM users";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
		echo "<table>";
		echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Gender</th></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['gender'] . "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "No users found";
	}
}

// Function to update a user
function update_user($connection_db) {
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $firstName=$_POST['firstname'];
        $lastName=$_POST['lastname'];
        $email=$_POST['email'];
        $password=sha1($_POST['password']);
        $gender=$_POST['gender'];
        $sql="UPDATE users SET fname='$firstName', lname='$lastName', email='$email', password='$password', gender='$gender' WHERE id=$id";
        $result=$connection_db->query($sql);
        if($result==true){
            echo "User updated Successfully";
        }else{
            echo "Error:".$sql."<br>".$connection_db->error;
            echo "User not updated";
        }
    }
}

// Function to delete a user
function delete_user($connection_db) {
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $sql="DELETE FROM users WHERE id=$id";
        $result=$connection_db->query($sql);
        if($result==true){
            echo "User deleted Successfully";
        }else{
            echo "Error:".$sql."<br>".$connection_db->error;
            echo "User not deleted";
        }
    }
}
?>
