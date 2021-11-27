<?php include('admin_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>HOSTEL WORLD</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <style>
	  	  body {
    background: url(admin_loginbg.jpg) no-repeat center center fixed;
    background-size: cover;
}
  </style>
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	 
  <form method="post" action="admin_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
		  <a class="btn" href="login.php" role="button">Student Login</a>
</div>
  	<p>
  		Not yet a member? <a href="admin_register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>