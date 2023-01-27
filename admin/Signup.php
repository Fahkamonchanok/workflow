<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once '../connect/connect.php';
//query
$query = "SELECT * FROM `admin` ";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div>
        <h1 class="text-center mt-2">Sign up Admin</h1>
        <form>
                <div style="width: 700px;" class="mx-auto">
                <div class="row mt-3">
                    <div class="col-lg-2 my-auto">
                        <label for="am_username" class="my-auto">Username</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="am_username" placeholder="Username">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-2 my-auto">
                        <label for="am_password" class="my-auto">Password</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="am_password" placeholder="Password">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-2 my-auto">
                        <label for="am_name" class="my-auto">Firstname</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="am_name" placeholder="firstname">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-2 my-auto">
                        <label for="am_surname" class="my-auto">Lastname</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="am_surname" placeholder="lastname">
                    </div>
</div>
                
            
            </div>
            <div class="mt-2 text-center">
            <button type="submit" class="btn btn-info px-5" onclick="saveAdmin()">สมัครสมาชิก</button>
            <button type="reset" class="btn btn-primary">reset</button>
            </div>
          </form>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
      
    function saveAdmin() {
            $.ajax({
                url: "./connect/addadmin.php",
                type: "POST",
                data: {
                    am_username: $("#am_username").val(),
                    am_password: $("#am_password").val(),
                    am_name: $("#am_name").val(),
                    am_surname: $("#am_surname").val(),
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        alert('สมัครสมาชิกสำเร็จ')
                        window.location.href = "admin/login.php";
                    } else if (dataResult.statusCode == 201) {
                        alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
                    } else if (dataResult.statusCode == 202) {
                        alert("มีข้อผิดพลาด กรุณากรอกข้อมูลให้ครบถ้วน!");
                    }
                }
            });
        }
    </script>
</body>
</html>
