<!DOCTYPE html>
<html>
<head>
	<title>Login to your account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sign_in.css">
</head>
<body>
	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign In</h2>
				<p>Login to MyChat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Someone@site.com" autocomplete="off" required="">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required="">
			</div>
			<div class="small">Forgot Password? <a href="forgot_pass.php">Click Here</a></div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
			</div>
			<?php include("signin_user.php"); ?>
		</form>
		<div class="text-center small" style="color: #67428B">Don't have an account? <a href="sign_up.php">Create One</a></div>
	</div>
</body>
</html>