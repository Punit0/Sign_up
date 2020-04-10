
<!DOCTYPE html>
<html>
<head>
  <title>Sign-up </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
	<h1>Enter the system</h1>
	<p>It is necessary to Login your account to signup for a course.</p>
</div>
<div class="header">
	<h2>Are you new?</h2>
	<h2><u>Register!</u></h2>
</div>

<form method="post" action="database.php"> 
<div class="input-group">
  	<input type="text" name="username" placeholder="Username" value="<?php echo 		$username; ?>" required>
</div>
<div class="input-group">
  	  <input type="email" name="email" placeholder="E-mail" value="<?php echo 		$email; ?>">
</div>
<div class="input-group">
  	 <input type="password" name="password_1" required placeholder="Password" >
</div>
<div class="input-group">
  	 <input type="password" name="password_2" required placeholder="Confirm Password" >
</div>
<div class="input-group">
  	 <button type="submit" class="btn" name="reg_user" >Register
	 </button><br>
</div>
<p>
  	Already a member? <a href="login.php">Sign in</a>
</p>
</form>	 
</body>
</html>
