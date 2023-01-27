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
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/computer.jpg " width="100%" height="my-auto" alt="IMG">
        </div>
        <div class="row mt-3">
        <div class="col-lg-3 my-auto">
          <label for="username" class="my-auto">ชื่อผู้ใช้ : </label>
        </div>
        <div class="col-lg-9">
          <input type="text" class="form-control" id="username" placeholder="ชื่อผู้ใช้">
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-3 my-auto">
          <label for="Password" class="my-auto">รหัสผ่าน : </label>
        </div>
        <div class="col-lg-9">
          <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน">
        </div>
      </div>
      <div class="mt-3 text-center">
        <button type="button" class="btn btn-primary" onclick="logIn()">เข้าสู่ระบบ</button>
      </div>
      <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="repsw.php">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-100">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
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
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    var id = "0";
    var idLogin = "";

    $(document).ready(function() {
      getProfile();
    });

    function getProfile() {
      $.ajax({
        url: "./connect/getProfileUser.php",
        type: "POST",
        data: {
          token: localStorage.getItem("token"),
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            idLogin = dataResult.data[0].User_ID;
            $("#userShow").text(dataResult.data[0].username);
            document.getElementById("logout").style.display = "block";
            document.getElementById("login").style.display = "none";
          } else if (dataResult.statusCode == 201) {
            document.getElementById("login").style.display = "block";
            document.getElementById("logout").style.display = "none";
            // alert("กรุณาเข้าสู่ระบบใหม่อีกครั้ง!");
            // window.location.href = "../admin/login.php";
          }
        }
      });
    }

    function logIn() {
      $.ajax({
        url: "./connect/loginUser.php",
        type: "POST",
        data: {
          username: $("#username").val(),
          password: $("#password").val(),
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            localStorage.setItem("token", dataResult.token);
            window.location.href = "index.php";
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          }
        }
      });
    }

    function logout() {
      $.ajax({
        url: "./connect/logoutUser.php",
        type: "POST",
        data: {
          idLogin: idLogin,
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            localStorage.setItem("token", "");
            window.location.href = "index.php";
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          }
        }
      });
    }

    function togglePassword() {
      var password = document.getElementById("password");
      (password.type === "password") ? password.type = "text": password.type = "password";
    }


    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>

  <!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>

</html>