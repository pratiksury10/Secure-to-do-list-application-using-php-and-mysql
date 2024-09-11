<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Get the task ID from the URL parameter
$task_id = $_GET['id'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "Gbrcy$!014763";
$database = "login_system";

$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection Failed :" . $connection->connect_error);
}

// Delete the task from the database
$sql = "DELETE FROM tasks WHERE id = '$task_id'";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query : " . $connection->error);
}

// Close the database connection
$connection->close();

// Redirect back to the dashboard
header('Location: dashboard.php');
exit;