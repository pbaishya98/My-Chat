<!DOCTYPE html>
<html>
<head>
	<title>Create New account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sign_up.css">
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Fill out this form and start chatting with your friends.</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="Example: pranjal321" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="Someone@site.com" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" required="">
					<option disabled="">Select a Country</option>
					<option>India</option>
					<option>United States of America</option>
					<option>UAE</option>
					<option>Brazil</option>
					<option>Japan</option>
					<option>French</option>
					<option>UK</option>
					<option>Pakistan</option>
				</select>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">Select your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Other</option>
				</select>
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			<?php include("signup_user.php"); ?>
		</form>
		<div class="text-center small" style="color: #67428B">Already have an account? <a href="sign_in.php">Sign In here</a></div>
	</div>
</body>
</html>