<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="hello.css">
</head>
<body>
     <section class="hello-container">
          <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
          <nav class="home-nav">
               <a href="logout.php">Logout</a>
               <a href="change-password.php">Change Password</a>
          </nav>
          <a href="signaturepad.php" class="start-now">Start Now</a>
     </section>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     
}
 ?>