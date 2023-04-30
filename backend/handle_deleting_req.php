<?php
include 'crud_functions.php';
include 'connection.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  delete_user($connection);
}

?>