<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once './connect/connect.php';
//query
$query = "SELECT * FROM user ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-lg-7 mb-4">
                <div class="card login-border shadow mt-5">
                    <div class="card-header login-head-border bg-info">
                        <h2 class="heading fw-bold mb-1 text-center text-dark">สมัครสมาชิก</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">First Name</label>
                                    <input type="text" class="form-control alphaonly" required id="firstname" placeholder="firstname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">Last Name</label>
                                    <input type="text" class="form-control alphaonly" required id="lastname" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">ID</label>
                                    <input type="text" class="form-control alphaonly" required id="id" placeholder="id">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">Position</label>
                                    <input type="text" class="form-control alphaonly" required id="position" placeholder="position">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">Phone</label>
                                    <input type="phone" class="form-control alphaonly" required id="tel" placeholder="phone"> 
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">Email</label>
                                    <input type="text" class="form-control alphaonly" required id="email" placeholder="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">username</label>
                                    <input type="text" class="form-control alphaonly" required id="username" placeholder="username@email.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="">Password</label>
                                    <input type="password" required class="form-control" id="password" placeholder="password"> 
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-info px-5" onclick="saveRegister()">สมัครสมาชิก</button>
                            <div class="mt-3">
                                คุณมีบัญชีอยู่แล้ว
                                <a href="login.php" class=" rem-ul">เข้าสู่ระบบ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script>
        // Function เพื่อตรวจสอบรหัสผ่านว่าตรงกันหรือไม่
        // function checkPassword(form) { 
        // password = form.password.value; 
        // password2 = form.password2.value; 
    
        // if (password != password2) { 
        //   alert ("Passwords are not identical. Please try again...") 
        //   return false; 
        //   } 
    
        // //ถ้าทั้งสองช่องตรงกัน  return true
        // else{ 
        //   alert("You have successfully signed up!") 
        //     return true; 
        //   } 
        // } 

        function saveRegister() {
            $.ajax({
                url: "./connect/addRegister.php",
                type: "POST",
                data: {
                    firstname: $("#firstname").val(),
                    lastname: $("#lastname").val(),
                    id: $("#id").val(),
                    position: $("#position").val(),
                    tel: $("#tel").val(),
                    email: $("#email").val(),
                    username: $("#username").val(),
                    password: $("#password").val(),
                    password2: $("#password2").val(),
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        alert('สมัครสมาชิกสำเร็จ')
                        window.location.href = "login.php";
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