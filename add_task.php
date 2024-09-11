<?php
require_once 'db.php'; // include database connection file

// Check if form data is submitted
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category']) && isset($_POST['due_date']) && isset($_POST['status'])) {
    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];

    // Insert task into database
    $sql = "INSERT INTO tasks (title, description, category, due_date, status) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssss", $title, $description, $category, $due_date, $status);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Task added successfully, redirect to dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Error adding task, display error message
        echo "Error adding task: " . $connection->error;
    }
} else {
    echo "Error: Form data not submitted";
}

$connection->close();
?>