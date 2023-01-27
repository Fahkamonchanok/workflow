<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login V1</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <!--===============================================================================================-->
</head>

<body>
<div class="limiter">
		<div class="container-login100">
				<form class="forget-form" method="POST" action="/forget">
					<div class="forget-pic">
						<img src="images/lock.png"  width="250" height="250" alt="IMG">
					</div>
					<span class="login100-form-title text-center">
						Forgotten your password?
					</span>
					<div class="title1">
						Enter your email address below, and we'll email instructions for setting a new one.
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input name="email"class="input100" type="text"  placeholder="Email Address">
						
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					
					<div>
						<button type="submit" class="forget-form-btn">
							Send my password
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>





  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->

</body>

</html>