<?php
  include 'connection.php';  
  $sql = "SELECT * FROM users";
  $result = $connection->query($sql);
  
  if ($result->num_rows > 0) {
    echo '<table class="table table-bordered table-hover">';
    echo '<thead class="thead-dark"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Gender</th></tr></thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()) {
      echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fname'] . '</td><td>' . $row['lname'] . '</td><td>' . $row['email'] . '</td><td>' . $row['gender'] . '</td></tr>';
    }
    echo '</tbody></table>';
  } else {
    echo "No users found";
  } 
?>