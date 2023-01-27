<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once '../connect/connect.php';
//query
$query = "SELECT * FROM wow ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>จัดการฐานข้อมูล</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
    <h3 class="w3-bar-item w3-block">จัดการฐานข้อมูล</h3>
    <div class="d-flex" style="padding-left: 20px;">
      <div>ยินดีต้อนรับ,</div>
      <div id="userLogin" style="font-weight: bold; color:blue; margin-left: 5px;"></div>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-green">WOW</a>
    <a href="roleid.php" class="w3-bar-item w3-button w3-hover-green">Role ID</a>
    <a href="fieldname.php" class="w3-bar-item w3-button w3-hover-green">Field name</a>
    <a href="operator.php" class="w3-bar-item w3-button w3-hover-green">Operator</a>
    <a href="constant.php" class="w3-bar-item w3-button w3-hover-green">Value/Constant</a>
    <a onclick="logout()" class="logout"  style="cursor: pointer;"><i class="fa fa-sign-out" style="margin-right: 10px;"></i>logout</a>
  </div>

  <!-- Page Content -->
  <div style="margin-left:15%">

    <div class="w3-container w3-teal">
      <h2>เพิ่ม ลบ แก้ไขข้อมูลในฐานข้อมูล Wow</h2>
    </div>
    <div class="d-flex mt-2">
        <button class="btn btn-primary" style="margin-left: auto;" onclick="addWow()"><i class="fa fa-plus" style="margin-right: 10px;"></i> Add</button>
    </div>
    <div class="w3-container mt-3">          
      <table class="table ">
          <thead class="table-dark">
              <tr>
                  <th scope="col">ลำดับ</th>
                  <th scope="col">Wow</th>
                  <th scope="col">แก้ไข</th>
                  <th scope="col">ลบ</th>
              </tr>
          </thead>
          <tbody class="table-group-divider">
          <?php $index = 1; if($row > 0) {
            do { ?>
            <tr>
              <td><?php echo $index ?></td>
              <td><?php echo $row['wow_name']; ?></td>
              <td><button class="btn" onclick="alertModalEdit('<?php echo $row['wow_id']; ?>', '<?php echo $row['wow_name']; ?>')"><i class="fa fa-pencil"></i></button></td>
              <td><button class="btn" onclick="alertConfirmDelete('<?php echo $row['wow_id']; ?>')"><i class="fa fa-trash"></i></button></td>
            </tr>
            <?php $index++; 
          } while ($row = mysqli_fetch_assoc($result)); ?>
          <?php } else { ?>
            <tr>
              <td colspan="7" class="text-center">ไม่พบข้อมูล WOW</td></tr>
          <?php } ?>
          </tbody>
      </table>
    </div>

  
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="Edit-title" id="exampleModalLongTitle">เพิ่มข้อมูล Wow</h5>
        </div>
        <div class="modal-body">
          <div>
            <label>Wow</label>
            <input type="text" required class="form-control" id="wow_name">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="saveAddWow()">บันทึก</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalConfirmDelete" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">ลบรายการ</h4>
        </div>
        <div class="modal-body">
          คุณต้องการลบรายการนี้ใช่หรือไม่
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="confirmDelete()">บันทึก</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="Edit-title" id="exampleModalLongTitle">แก้ไขข้อมูล</h5>
        </div>
        <div class="modal-body">
        <div class="mt-3">
            <label>Wow</label>
            <input type="text" required class="form-control" id="wownameEdit">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="saveEditMenu()">บันทึก</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModalEdit()">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script>
    var idDelete = "";
    var idEdit = "";
    var idLogin = "";

    $(document).ready(function() {
      getProfile();
    });

    function getProfile() {
      $.ajax({
        url: "../connect/getProfile.php",
        type: "POST",
        data: {
          token: localStorage.getItem("token"),
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            idLogin = dataResult.data[0].am_ID;
            $("#userLogin").text(dataResult.data[0].am_username);
          } else if (dataResult.statusCode == 201) {
            alert("กรุณาเข้าสู่ระบบใหม่อีกครั้ง!");
            window.location.href = "../admin/login.php";
          }
        }
      });
    }

    function logout() {
      $.ajax({
        url: "../connect/logout.php",
        type: "POST",
        data: {
          idLogin: idLogin,
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            window.localStorage.removeItem('token');
            window.location.href = "../admin/login.php";
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          }
        }
      });
    }

    function alertConfirmDelete(id) {
      idDelete = id;
      $("#modalConfirmDelete").modal("show");
    }

    function confirmDelete() {
      $.ajax({
        url: "../connect/deleteWow.php",
        type: "POST",
        data: {
          id: idDelete,
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            alert('ทำรายการลบสำเร็จ')
            location.reload();
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          }
        }
      });
    }

    function addWow() {
      $("#modalForm").modal("show");
    }

    function closeModal() {
      $("#wow_name").val("");
      $("#modalForm").modal("hide");
    }

    function closeModalEdit() {
      $("#wowEdit").val("");
      $("#modalEdit").modal("hide");
    }

    function alertModalEdit(id, filename) {
      $.ajax({
        url: "../connect/getWowByID.php",
        type: "POST",
        data: {
          id: id,
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            $("#WowEdit").val(dataResult.data[0].wow_name);
            idEdit = id;
            $("#modalEdit").modal("show");
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          }
        }
      });
    }

    function saveAddWow() {
      $.ajax({
        url: "../connect/addWow.php",
        type: "POST",
        data: {
          wow_name: $("#wow_name").val()
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            alert('เพิ่มข้อมูล WOW สำเร็จ')
            location.reload();
          } else if (dataResult.statusCode == 201) {
            alert("มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!");
          } else if (dataResult.statusCode == 202) {
            alert("มีข้อผิดพลาด กรุณากรอกข้อมูลให้ครบถ้วน!");
          }
        }
      });
    }

    function saveEditAdmin() {
      $.ajax({
        url: "../connect/editAdmin.php",
        type: "POST",
        data: {
          id: idEdit,
          password: $("#passwordEdit").val(),
          firstname: $("#firstnameEdit").val(),
          lastname: $("#lastnameEdit").val(),
          tel: $("#telEdit").val(),
          updateBy: idLogin
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            alert('แก้ไขข้อมูลผู้ดูแลระบบสำเร็จ')
            location.reload();
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