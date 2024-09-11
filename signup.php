<?php include('includes/header.php'); ?>

<h2>Sign Up</h2>
<form class="form" action="includes/signup.php" method="post">
    <div class="form-group">
        <label for="username">Username : </label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label for="email">Email : </label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label for="password">Password : </label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <label for="confirm_password">Confirm Password : </label>
        <input type="password" name="confirm_password" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary">
    </div>
</form>

<?php include('includes/footer.php'); ?>
