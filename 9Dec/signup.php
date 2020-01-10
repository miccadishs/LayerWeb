<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="loginsignup.css">
	<link rel="stylesheet" type="text/css" href="utillogin.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Hamara Layers Portal Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter fullname">
						<input class="input100" type="text" name="fullname" placeholder="Fullname">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-6">
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Please confirm password">
						<input class="input100" type="password" name="passcon" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>


					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
						</span>


						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login-form-btn"><a href="login.php">Sign Up!</a>

						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Already have an account?
						</span>

						<a href="login.php" class="txt3">
							Login now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
