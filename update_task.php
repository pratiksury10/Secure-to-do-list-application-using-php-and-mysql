<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Get the task data from the form
$task_id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$due_date = $_POST['due_date'];
$status = $_POST['status'];

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

// Update the task data in the database
$sql = "UPDATE tasks SET title = '$title', description = '$description', category = '$category', due_date = '$due_date', status = '$status' WHERE id = '$task_id'";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query : " . $connection->error);
}

// Close the database connection
$connection->close();

// Redirect back to the dashboard
header('Location: dashboard.php');
exit;