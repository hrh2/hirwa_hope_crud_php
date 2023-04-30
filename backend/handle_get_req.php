<?php
include 'crud_functions.php';
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle GET request
    get_users($connection);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle POST request
    add_users($connection);
}
?>