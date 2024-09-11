<?php
$servername = "localhost";
$username = "root";
$password = "Gbrcy$!014763";
$database = "login_system";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection Failed :" . $connection->connect_error);
}
?>