<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/pwu.png">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>LOGIN</title>
</head>
<body>
     <form action="login.php" method="post" class="form">
     	<h2>LOGIN</h2>
			<!-- php -->
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>

		 	<div class="group-container">
				 <!-- Username -->
				<div class="form-group">
					<input type="text" placeholder="uname" name="uname" class="form-control">
					<label for="uname" class="form-label">User Name</label>
				</div>

				<!-- Password -->
				<div class="form-group">
					<input type="password" placeholder="password" name="password" class="form-control">
					<label for="password" class="form-label">Password</label>
				</div>

				<!-- Login button -->
				<input type="submit" value="Login"/>
				
				<!-- Create an account and Back to Home -->
				<div class="create">
					<a href="signup.php">Create an account</a>
					<a href="index.html">Back to Home</a>
				</div>
			 </div>
     </form>
</body>
</html>