<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-admin">
        <div class="card-admin">
                <center><img src="../images/admin.png"  width="120px"  height="my-auto" alt="IMG"></center>
                <h1 class="heading fw-bold mb-1 mt-3 text-center text-dark">LOGIN</h1>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group mt-3">
                        <label class="">Username admin</label>
                        <input type="text" class="form-control" required id="username" placeholder="username">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mt-3">
                        <label class="">Password</label>
                        <input type="password" required class="form-control" id="password" placeholder="password">
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-2 mb-4" >
                    <button type="button" class="btn btn-primary" onclick="logIn()">เข้าสู่ระบบ</button>
                    
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        function logIn() {
            $.ajax({
                url: "../connect/login.php",
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
                        window.location.href = "../admin/adminwow.php";
                    } else if (dataResult.statusCode == 201) {
                        alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
                    }
                }
            });
        }
    </script>
</body>

</html>