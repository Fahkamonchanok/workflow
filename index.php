<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once './connect/connect.php';

//query
$sql = "SELECT * FROM `wow`";
$query = mysqli_query($conn, $sql);

$sql = "SELECT * FROM workflow";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Main</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="js/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.1109/styles/kendo.default-v2.min.css"/>

  <style type="text/css">
    .textbox {
      position: relative;
      padding: 0.5em;
      background: #0e006b;
      color: #fff;
    }

    .navleft {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;

    }

    .textbox2 {
      position: relative;
      font-weight: bold;
      padding: 0.5em;
      background: #f8f5b7;
      color: rgb(0, 0, 0);
    }

    .button1 {
      background-color: #233b63;
      /* Green */
      border: none;
      color: white;
      width: 55px;
      padding: 14px;
      border-radius: 4px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
    }

    .iBannerFix {
      position: fixed;
      right: 50px;
      bottom: 50px;
    }

    .cus-icon:before {
      width: 30px;
      height: 30px;
    }

    .box {
      background-color: rgb(240, 238, 238);
      right: 0px;
      bottom: 50px;
      height: 400px;
      /* padding: 25px; */
      border: 2px solid rgb(150, 150, 150);
      
    }

    
  </style>

</head>

<!--v- layout-fixed -v-->

<body>
  
  <div class="w3-sidebar w3-bar-block w3-teal w3-card w3-animate-left " style="display:none" id="mySidebar">

    <button class="w3-bar-item w3-button w3-xlarge" onclick="w3_close()"> : Activity Symbol&times;</button>

    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center"style="padding-left: 1rem; padding-right: 1rem;">
      <div class="row mt-3">
        <div class="col-lg-6">
            <div class="btn btn-lg " onclick="showMessage()">
              <img src="images/Task.png" width="60" height="60"></a>
            </div>
            <a>Task/activity</a>
        </div>
        <div class="col-lg-6">
          <div class="btn btn-lg " onclick="document.getElementById('id02').style.display='block'">
            <img src="images/square.png" width="60" height="60"></a>
          </div>
          <a>Command Condition</a>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-lg-6">
          <div class="btn btn-lg ">
            <img src="images/rightarrow.png" width="60" height="60"></a>
          </div>
          <a>Direction</a>
        </div>
        <div class="col-lg-6">
          <div class="btn btn-lg ">
            <img src="images/Notification.png" width="60" height="60"></a>
          </div>
          <a>Notification</a>
           
        </div>
      </div>
          
           <div class="btn btn-lg mt-1" data-toggle="modal" data-target="#myModal">
              <img src="images/Process.png" width="80" height="70"></a>
            </div>
            <a>Start/stop Process</a>
        
      
      
      <div class="w3-bar-item w3-button w3-xlarge mt-3"> : Role Symbol</div>

        <div class="mt-3">
          <div class="btn btn-lg " onclick="document.getElementById('id03').style.display='block'">
            <img src="images/staff.png" width="70" height="70"></a>
          </div>
          <a>Staff</a>
        </div>
      

      <div class="row mt-1">
        <div class="col-lg-6">
          <div class="btn btn-lg ">
            <img src="images/committee.png" width="60" height="60"></a>
          </div>
          <a>committee</a>
        </div>
       <div class="col-lg-6">
        <div class="btn btn-lg ">
            <img src="images/supervisor.png" width="60" height="60"></a>
          </div>
          <a>supervisor</a>
       </div>
      </div>
    </ul>
  </div>

  <div id="main">
    
    <div class="w3-teal w3-xlarge">
      <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
      <span class="w3-large">Workflow Setup</span>
      

      <div class="w3-right mt-1">
        <button type="button" class="navbar-toggler border-0 px-2">
        <i class="fas fa-user cus-icon py-1 ">  <span id="userShow"></span> </i>
      </button>
      <button type="button" class="navbar-toggler border-0 " >
        <a onclick="logout()" style="cursor: pointer;"><i class="fas fa-sign-out-alt cus-icon py-1 "></i>ออกจากระบบ</a>
      </button>
      </div>
      

    </div>
      <div class="w3-container">
        
        <ul class="w3-ul w3-card-4 mt-3">
          <li class="w3-bar">

            <span onclick="this.parentElement.style.display='none'"
              class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
            <div class="w3-bar-item">
              <span class="w3-large">Mike</span><br>
              <span>Web Designer</span>
            </div>
          </li>
          <li class="w3-bar">
            <span class="w3-bar-item w3-button w3-teal w3-large w3-right"
              onclick="document.getElementById('id05').style.display='block'">detail</span>
            
            <div class="w3-bar-item">
              <span>Workflow Code :</span><br>
              <span>Workflow Group (WOW) : </span>
            </div>
          </li>
  

        </ul>
        <div id="diagram"></div>

            </div>
            <button class="btn btn-primary" style="margin-left: auto;" onclick="addWorkflow()"><i class="fa fa-plus" style="margin-right: 10px;"></i> Add</button>
  </div>
  
  
  <button onclick="addworkflow()".style.display='block'" class="w3-button w3-circle iBannerFix"><img src="images/plus.png" width="80" height="80"></button>
  
      
      
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      
      <header class="w3-container w3-teal">
        <h2>+Add New Workflow</h2>
      </header>
      <div class="w3-container">
        <form class="form-horizontal" method="POST" action="/addnewworkflow">
          <div class="w3-section">
            <label class="form-label">Workflow Code</label>
            <input type="text" required class="form-control" name="workflowcode"
              placeholder="โปรดระบุชื่องานที่ต้องการ">
            <label for="standard-select">Workflow Group (WOW)</label>
            <select name="wow" class="form-select" style="width: 400px;">
              <option value="" selected disabled>ระบุประเภทของงาน</option>
              <option value="0">เปิด</option>
              <option value="1">ปิด</option>
            </select>
            <label>Description</label>
            <textarea required class="summernote form-control" name="description"
              placeholder="อธิบายรายละเอียดของงานโดยย่อ"></textarea>
            <label class="form-label">Effective Date</label>
            <input type="date" required class="form-control" name="effdate" placeholder="ระบุวันที่มีผล dd/mm/yyyy">
            <label class="form-label">End Date</label>
            <input type="date" required class="form-control" name="enddate"
              placeholder="ระบุวันที่มีสิ้นสุด dd/mm/yyyy">
          </div>
      </div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button class="w3-button w3-right w3-green w3-border " type="submit">Add</button>
        <button class="w3-button w3-right w3-red w3-border"
          onclick="document.getElementById('id01').style.display='none'">Cancel</button>
        </form>
      </div>
      
    </div>
  </div>


  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal">
        <h2>+ Add Command / Condition</h2>
      </header>
      <div class="w3-container">
        <form class="w3-container" action="/action_page.php">

          <div class="w3-section">
            <div class="form-group mt-3">
              <div class="row">
                <div class="col-lg-5">
                  <label for="standard-select">Field name</label>
                  <select name="ww" id="ww" class="form-select" style="width: 320px;">
                    <option value="" selected disabled>เลือกข้อมูลที่เป็นเงื่อนไขของ Workflow</option>
                    <option value="0">เปิด</option>
                    <option value="1">ปิด</option>
                  </select>
                  <label for="standard-select">Operator</label>
                  <select name="operation" class="form-select" style="width: 320px;">
                    <option value="" selected disabled>ระบุ operation</option>
                    <option value="0">เปิด</option>
                    <option value="1">ปิด</option>
                  </select>
                  <label for="standard-select">Value/Constant</label>
                  <select name="aa" class="form-select" style="width: 320px;">
                    <option value="" selected disabled>ระบุค่า หรือ ตัวแปรที่ต้องการ</option>
                    <option value="0">เปิด</option>
                    <option value="1">ปิด</option>
                  </select>
                </div>
                <div class="col-lg-1">

                  <div class="mt-3">
                    <button onclick="document.getElementById('id01')" class="button1">add</button>
                  </div>
                  <div class="mt-3">
                    <button onclick="document.getElementById('id01')" class="button1">or</button>
                  </div>
                  <div class="mt-3">
                    <button onclick="document.getElementById('id01').style.display='block'" class="button1">></button>
                  </div>
                  <div class="mt-3">
                    <button onclick="document.getElementById('id01').style.display='block'" class="button1">
                      << /button>
                  </div>
                  <div class="mt-3">
                    <button onclick="document.getElementById('id01').style.display='block'" class="button1">()</button>
                  </div>

                </div>
                <div class="col-lg-6">
                  <div class="box">
                    <div class="textbox">Compound Expression</div>
                    <div class="text-center mt-3">Leavetype = ""</div>
                    <div class="textbox2 text-center mt-3">AND</div>
                    <div class="text-center mt-3">LeaveDay </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button class="w3-button w3-right w3-green w3-border " type="submit">Add</button>
        <button class="w3-button w3-right w3-red w3-border"
          onclick="document.getElementById('id02').style.display='none'">Cancel</button>
      </div>
    </div>
  </div>

  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal">
        <h2>+ Add Role</h2>
      </header>
      <div class="w3-container">
        <form class="w3-container" action="/action_page.php">
          <div class="w3-section">
            <div class="form-group mt-3">
              <label for="standard-select">Role ID</label>
              <select name="wow" id="wow" class="form-select" style="width: 400px;">
                <option value="" selected disabled>เลือก Role ที่ต้องการ</option>
                <option value="0">เปิด</option>
                <option value="1">ปิด</option>
              </select>

              <label for="standard-select">Role Property</label><br>
              <input type="radio" id="Start" name="fav_language" value="Start">
              <label for="Start">Individual</label>
              <input type="radio" id="stop" name="fav_language" value="stop">
              <label for="stop">Group/Committee</label>
              <input type="number" min="1" max="100" value="1">
              <label for="stop">จำนวนคนอนุมัติ</label><br>

              <label for="standard-select">Role Policy</label><br>
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Role ถัดไปเป็นคนเดียวกันระบบอนุมัติโดยอัตโนมัติ</label><br>
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Role ถัดไปห้ามเป็นคนเดียวกัน</label><br>
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Role ถัดไปจะต้องมีตำแหน่งสูงกว่าเท่านั้น</label><br>

              <label for="standard-select">Notify</label><br>
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1">Mail</label>
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1">SMS</label>
            </div>
          </div>
        </form>
      </div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button class="w3-button w3-right w3-green w3-border " type="submit">Add</button>
        <button class="w3-button w3-right w3-red w3-border"
          onclick="document.getElementById('id03').style.display='none'">Cancel</button>
      </div>
    </div>
  </div>

  <div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal">
        <h2>+Add New Workflow</h2>
      </header>
      <div class="w3-container">
        <div class="w3-section">
          <label class="form-label">Workflow Code</label>
          <input type="text" required class="form-control" name="workflowcode" id="workflowcode"
            placeholder="โปรดระบุชื่องานที่ต้องการ">
          <label for="standard-select">Workflow Group (WOW)</label>
          <select name="wow" id="wow" class="form-select" style="width: 400px;">
            <option value="" selected disabled>ระบุประเภทของงาน</option>
            <option value="0">เปิด</option>
            <option value="1">ปิด</option>
          </select>
          <label>Description</label>
          <textarea required class="summernote form-control" name="description" id="description"
            placeholder="อธิบายรายละเอียดของงานโดยย่อ"></textarea>
          <label class="form-label">Effective Date</label>
          <input type="date" required class="form-control" name="effdate" id="effdate"
            placeholder="ระบุวันที่มีผล dd/mm/yyyy">
          <label class="form-label">End Date</label>
          <input type="date" required class="form-control" name="enddate" id="enddate"
            placeholder="ระบุวันที่มีสิ้นสุด dd/mm/yyyy">
        </div>
      </div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">

        <button class="w3-button w3-right w3-red w3-border"
          onclick="document.getElementById('id04').style.display='none'">Cancel</button>
      </div>
    </div>

  </div>
  <div id="id05" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal">
        <h2>Workflow</h2>
      </header>
      <div class="w3-container">
        <div class="w3-section">

          <label class="form-label">Workflow Code :</label><br>

          <label for="standard-select">Workflow Group (WOW) :</label><br>

          <label>Description :</label><br>

          <label class="form-label">Effective Date :</label><br>

          <label class="form-label">End Date :</label><br>

        </div>
      </div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">

        <button class="w3-button w3-right w3-red w3-border"
          onclick="document.getElementById('id05').style.display='none'">Cancel</button>
      </div>
    </div>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="wrap-command">
            <div class="mt-3 text-center">
              <input type="radio" id="Start" name="fav_language" value="Start">
              <label for="Start">Start</label>
              <input type="radio" id="stop" name="fav_language" value="stop">
              <label for="stop">stop</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="Edit-title" id="exampleModalLongTitle">+ Add New Workflow</h5>
        </div>
        <div class="modal-body">
          <div>
            <label>Workflow Code</label>
            <input type="text" required class="form-control" id="wf_code">
          </div>
          <div class="mt-3">
            <label>Workflow Group (WOW) </label>
            <select name="wow" id="wow" class="form-select" >
                                <option value="" selected disabled>ระบุประเภทของงาน</option>
                                <?php foreach ($query as $value) { ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['wow_name'] ?></option>
                                <?php } ?>
            </select>
          </div>
          <div class="mt-3">
            <label>Description</label>
            <textarea required class="summernote form-control" name="wf_description"></textarea>
          </div>
          <div class="mt-3">
            <label>Effective Date</label>
            <input type="date" name="wf_effective" class="form-control" min="<?php echo date('Y-m-d'); ?>" id="wf_effective" placeholder="ระบุวันที่มีผล dd/mm/yyyy" >
          </div>
          <div class="mt-3">
            <label>End Date</label>
            <input type="date" name="wf_end" class="form-control" min="<?php echo date('Y-m-d'); ?>" id="wf_end" placeholder="ระบุวันที่มิสิ้นสุด dd/mm/yy" >
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="saveAddWorkflow()">บันทึก</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div>


  <script>
    function w3_open() {
      document.getElementById("main").style.marginLeft = "15%";
      document.getElementById("mySidebar").style.width = "15%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'inline-block';
    }
    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  
  <script>
    var id = "0";
    var idLogin = "";

    $(document).ready(function() {
      getProfile();
    });

    function addWorkflow() {
      $("#modalForm").modal("show");
    }

    function closeModal() {
      $("#wf_code").val("");
      $("#modalForm").modal("hide");
    }

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
   
    function saveAddWorkflow() {
      $.ajax({
        url: "./connect/addWorkflow.php",
        type: "POST",
        data: {
          wf_code: $("#wf_code").val(),
          wow_name: $("#wow_name").val(),
          wf_description: $("#wf_description").val(),
          wf_effective: $("#wf_effective").val(),
          wf_end: $("#wf_end").val(),
          createBy: idLogin
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            alert('เพิ่มข้อมูล Workflow สำเร็จ')
            location.reload();
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          } else if (dataResult.statusCode == 202) {
            alert("มีข้อผิดพลาด กรุณากรอกข้อมูลให้ครบถ้วน!");
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
            window.location.href = "login.php";
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          }
        }
      });
    }
  </script>
  <script type="text/javascript">
    var idFlow = "";
    $(document).ready(function() {
      var url = new URL(location.href);
      var id = url.searchParams.get("id");
      idFlow = id
    });

    $(function () {
      var $select = $("#1-100");
      for (i = 1; i <= 100; i++) {
        $select.append($('<option></option>').val(i).html(i))
      }
    });
    function myFunction() {
      var x = document.createElement("IMG");
      x.setAttribute("src", "committee.png");
      x.setAttribute("width", "304");
      x.setAttribute("width", "228");
      x.setAttribute("alt", "The Pulpit Rock");
      document.body.appendChild(x);
    }
    $(function () {
      /*เมื่อปุ่มปิด หรือ เปิด เมนูด้านซ้ายถูกคลิก*/
      $(".close-l-sidenav,.open-l-sidenav").on("click", function () {
        var toggleWidth = ($(".l-sidenav").width() == 0) ? 250 : 0;
        $(".l-sidenav").width(toggleWidth);
        var toggleMarginLeft = toggleWidth; /*ให้ขยับส่วนของคลุมดำออกไปเท่ากับความกว้างของเมนูที่ขยับเข้ามา*/
        var toggleOverlayWidth = ($(".page-overlay-bg").width() == 0) ? "100%" : 0; /*ซ่อนหรือแสดงโดยการกำหนดค่าความกว้าง*/
        // var fullHeight = $(".page-main").height(); /* ความสูงของเนื้อหา*/
        $(".page-overlay-bg").css("margin-left", toggleMarginLeft); /*ขยับพื้นที่คลุมดำตามการแสดงของเมนูด้านซ้าย*/
        // $(".page-overlay-bg").height(fullHeight); /*ให้ความสูงของพื้นที่คลุมดำเท่ากับเนื้อหา*/
        $(".page-overlay-bg").width(toggleOverlayWidth); /*ให้ความกว้างของพื้นที่คลุมดำเท่ากับ 100% หรือ 0*/
      });
    });

    function myFunction() {
      document.getElementById("field2").value = document.getElementById("field1").value;
    }

  </script>
  
  <script>
    $('document').ready(function () {

      var diagram = $("#diagram").kendoDiagram({

        connectionDefaults: {
          endCap: {
            type: 'ArrowEnd',
            fill: {
              color: "#222222"
            }
          },
          hover: {
            stroke: {
              color: "#02DA10",
              fill: "#02DA10"
            }
          }
        }
      }).getKendoDiagram();


      function createShape(options) {
        var shapeOptions = {
          id: options.id,
          x: options.positionX,
          y: options.positionY,
          width: options.width || 100,
          height: options.height || 50,
          type: options.type,
          path: options.path || undefined,
          content: {
            text: options.textData || undefined,
            color: options.textData.length> 15? 'transparent' : '#fff'
          },
          fill: options.fillColor || '#0088CC'
        };

        var shape = new kendo.dataviz.diagram.Shape(shapeOptions);

        return shape;
      }

      var data = [{
        'id': 1,
        'textData': 'Start',
        'type': 'circle',
        'positionX': 424.5,
        'positionY': 20,
        'fillColor': 'green',
        'width': 50
      },{
        'id': 2,
        'textData': 'State 1',
        'type': 'rectangle',
        'positionX': 400,
        'positionY': 125,
        'height': 100,
        'width': 100,
        'path': 'M 50 0 100 50 50 100 0 50 Z'
      },{
        'id': 3,
        'textData': 'Completed?',
        'type': 'circle',
        'positionX': 399.5,
        'positionY': 290
      }];

      var connectionsData = [{
          'fromShapeId': 1,
        'toShapeId': 2
      },{
          'fromShapeId': 2,
        'toShapeId': 3
      },{
          'fromShapeId': 3,
        'toShapeId': 1
      }];

      for(var i = 0; i < data.length; i++) {
          diagram.addShape(createShape(data[i]));
      }

      for(var j = 0; j < connectionsData.length; j++){
        var sourceShape = diagram.getShapeById(connectionsData[j].fromShapeId);
        var targetShape = diagram.getShapeById(connectionsData[j].toShapeId);
          diagram.connect(sourceShape, targetShape);
      }
    });
  </script>
  
</body>

</html>