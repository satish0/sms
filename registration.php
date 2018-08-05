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
		<section class="container">
			<div class="custom-container">
				<div class="layout reg">
					<div class="row">
						<div class="col-md-12">
							<h1>Registration</h1>
							<form action="" method="post" target="_blank" enctype="multipart/form-data">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="fname" id="full_name" placeholder="Full Name">
								</div>
								<br>
								<div class="form-group">
									<label>Phone No:</label>
									<input type="text" name="phone_no" id="phone_no" placeholder="Phone No">
								</div>
								<br>
								<!-- <div class="form-group">
									<label>Gender</label>
									<select name="gender" id="">
										<option value="gender">select</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">other</option>
									</select>
								</div> -->
								<br>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="uname" id="username" placeholder="Username">
								</div>
								<br>
								<div class="form-group">
									<label>Password</label>
									<input type="text" name="pass" id="password" placeholder="Password">
								</div>
								<br>
								<div class="form-group">
									<input class="" name="login" type="submit" id="submit">
								</div>
							</form>
							<div class="reg-link">
								<p>Already have an account <a id="" href="http://localhost/sms/index.php" onclick="login()">Login</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

<?php 
	
	$a=mysqli_connect('localhost','root','', 'sms');

	if (isset($_POST["submit"])) {
		$fullname = $_POST['fname'];
		$phone = $_POST['phone_no'];
		$gender = $_POST['gender'];
		$username = $_POST['uname'];
		$password = $_POST['pass'];

		$query= "INSERT INTO `userdetails` (`user_id`, `full_name`, `phone_no`, `gender`, `username`, `password`) VALUES (NULL, '$fullname', '$phone', NULL, '$username', '$password')";
		if(mysqli_query($a,$query)){
			echo "record submit";
			header('location:index.php');
		}
		else{
			echo "somethin went wrong";
		}

		// $result = mysqli_query($conn,$sql);
		// printf($result);
		// if (!$result) {
		// 	?>
		// 		<script>
		// 			alert("please fill all details correctly");
		// 		</script>
		// 	<?php
		// }
		// else {
		// 	echo $result;
		// 	$data=mysqli_fetch_assoc($result);
		// 	$user = $data['username'];
		// 	$_SESSION['username']= $user;
		// 	echo $user;
		// 	// header('location:index.php');
		// }
		
}


?>