<!DOCTYPE html>
<html>
	<head>
		<title>javascript first program</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/login.css">
		<script type="text/javascript" src="js/index.js"></script>
	</head>
	<body>
		<section class="container" id="reg">
			<div class="custom-container">
				<div class="layout login">
					<div class="row">
						<div class="col-md-12">
							<h1>Login</h1>
							<form action="index.php" method="post" target="_blank">
								<div class="form-group">
									<label>User Name</label>
									<input name="uname" type="text" id="username" placeholder="User Name">
								</div>
								<br>
								<div class="form-group">
									<label>Password</label>
									<input name="pass" type="text" id="password" placeholder="Password">
								</div>
								<br>
								<div class="form-group">
									<input class="" name="submit" type="submit" id="submit">
								</div>
							</form>
							<div class="login-link">
								<div class="login-features pull-right">
									<div class="forget-password">
										<p><a id="forget-password" href="http://localhost/sms/resetpass.php">Forget Password</a></p>
									</div>
									<div class="new-user">
										<p>New User <a id="login" href="http://localhost/sms/registration.php">Create account</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

<?php
	$conn;
	include('dbcon.php');

	if(isset($_POST['submit'])) {
	$username = $_POST['uname'];
	$password = $_POST['pass'];
 	$sql = "SELECT * FROM `userdetails` WHERE `username` = '$username' AND `password` = '$password'";
 	$result = mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
 	if ($rowcount < 1) {
 		?>
 		<script>
	    	alert('username and password not matched');
	    	window.open('index.php','_self');
	    </script>
	    <?php
	    }
	else{
			$data=mysqli_fetch_assoc($result);
			$user = $data['username'];
			$_SESSION['username']= $user;
			header('location:dashboard.php');
		}
}
?>