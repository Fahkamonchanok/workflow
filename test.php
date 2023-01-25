<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าแรก</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <div class="content">
    <h1 class="text-center mt-3">เข้าสู่ระบบ</h1>
    <div>
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
      <p class="mt-3 text-center"> คุณยังไม่มีบัญชีใช่ไหม? <a href="register.php" class="rem-ul"> สมัครสมาชิก </a> </p>
    </div>
 
  </div>


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
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

    function logout(){
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
  </script>
</body>

</html>