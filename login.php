<?php include('includes/header.php'); ?>
	<?php

	if(isset($_GET['message'])){
		echo "<h3>".$_GET['message']."</h4>";
	}

	?>
   <!--LOGIN FORM -->
	<form class="form" action="includes/dashboard.php" method="post">
		<div class="form-group">
			<label for="email">Email : </label>
			<input type="email" name="email" class="form-control">
		</div>
		<br>
		<div class="form-group">
			<label for="password">Password : </label>
			<input type="password" name="password" class="form-control">
        </div>
		<br>
		<div class="form-group">
			<input type="submit" name="login" value="Login" class="btn btn-success">
		</div>

		
	</form>



<!-- Sign-Up Form -->

<div class="form-group">
    <a href="signup.php" class="btn btn-primary">Sign Up</a>
</div>


	


<?php include('includes/footer.php'); ?>