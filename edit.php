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

// Retrieve the task data from the database
$sql = "SELECT * FROM tasks WHERE id = '$task_id'";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query : " . $connection->error);
}

// Fetch the task data
$task_data = $result->fetch_assoc();

// Close the database connection
$connection->close();

// Display the edit form
?>

<form id="editTaskForm" action="update_task.php" method="post">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control" value="<?php echo $task_data['title']; ?>" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" class="form-control" required><?php echo $task_data['description']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="category">Category:</label>
        <select id="category" name="category" class="form-control">
            <option value="Work" <?php if ($task_data['category'] == 'Work') echo 'selected'; ?>>Work</option>
            <option value="Personal" <?php if ($task_data['category'] == 'Personal') echo 'selected'; ?>>Personal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="dueDate">Due Date:</label>
        <input type="date" id="dueDate" name="due_date" class="form-control" value="<?php echo $task_data['due_date']; ?>" required>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select id="status" name="status" class="form-control">
            <option value="Pending" <?php if ($task_data['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="In Progress" <?php if ($task_data['status'] == 'In Progress') echo 'selected'; ?>>In Progress</option>
            <option value="Completed" <?php if ($task_data['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
        </select>
    </div><br>
    <input type="hidden" name="id" value="<?php echo $task_id; ?>">
    <button type="submit" class="btn btn-primary">Update Task</button>
</form>