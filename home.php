<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="includes/bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/style.css">
</head>
<body>
    <div class="container my-5">
        <h1>Dashboard</h1>
        <?php
        session_start();
        if(isset($_SESSION['email'])){
            echo "<h2>Hello, welcome to the page " . $_SESSION['email'] . "</h2>";
        }
        ?>

        <form id="taskForm" action="add_task.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="category" class="form-control">
                    <option value="Work">Work</option>
                    <option value="Personal">Personal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dueDate">Due Date:</label>
                <input type="date" id="dueDate" name="due_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" class="form-control">
                    <option value="Pending">Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select>
            </div><br>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <br>
        <h2>Tasks</h2>
        <div id="taskList" >
        <div id="taskList" >
<table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
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

            // Read all rows from database table
            $sql = "SELECT * FROM tasks";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query : " . $connection->error);
            }

            // Read data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['due_date'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>";
                echo "<button class='btn btn-primary' onclick='editTask(" . $row['id'] . ")'>Edit</button>";
                echo "<button class='btn btn-danger' onclick='deleteTask(" . $row['id'] . ")'>Delete</button>";
                echo "</td>";
                echo "</tr>";
            }

            $connection->close();
            ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="includes/js/dashboard.js"></script>

</body>
</html>
