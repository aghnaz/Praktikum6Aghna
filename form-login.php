<html lang="en">
<head>
	<title>LOGIN </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form-login.css">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">



</head>
<body>
	<div class="wrapper">
		<div class="login-card">
			<div class="wrap-login">
				<div class="login-title" style="background-image: url(back2.jpg);">
					<span class="judul">
						Sign In
					</span>
				</div>

				<form action="php-login.php" method="post" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">NIS</span>
						<input class="input100" type="text" name="nis" placeholder="Enter NIS">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" action="php-login.php" method="post">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="js/main.js"></script>

</body>
</html>