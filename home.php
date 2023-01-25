<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าแรก</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 
  <div>
    <nav class="navbar navbar-expand-lg ">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active my-auto"><a class="active" href="">หน้าหลัก</a></li>
          <li class="nav-item my-auto" id="login"><a class="" href="login.php">เข้าสู่ระบบ</a></li>
          <li class="nav-item my-auto" id="logout" style="display: none;"><i class="fa fa-user" style="margin-right: 5px;"></i><span id="userShow"></span>&emsp;<i class="fa fa-sign-out" style="margin-right: 5px;"></i><a onclick="logout()" style="cursor: pointer;">ออกจากระบบ</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="content">
    <h1 class="text-center">WELCOME TO CANALE HOUSE</h1>
    <h2 class="text-center">ยินดีต้อนรับเข้าสู่ร้าน Canale</h2>
   

    
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
            window.localStorage.removeItem('token');
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