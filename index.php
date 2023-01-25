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

  <link rel="stylesheet" href="css/adminlte.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/adminlte.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

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
        <i class="fas fa-user cus-icon py-1 "></i>
      </button>
      <button type="button" class="navbar-toggler border-0 " >
        <a href="/logout" style="color: white;"><i class="fas fa-sign-out-alt cus-icon py-1 " ></i>ออกจากระบบ</a>
      </button>
      </div>
      

    </div>
      <div class="w3-container">
        
        <h4>hello, </h4>
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
              <span>Workflow Code :<%=user.fistname%></span><br>
              <span>Workflow Group (WOW) : </span>
            </div>
          </li>
  
  
        </ul>
        <div id="diagram"></div>
         
        <!-- <div class="btn btn-lg iBannerFix" data-toggle="modal" data-target="#myModal">
                  <a href="javascript:register('show');"><img src="images/plus.png" width="80" height="80"></a>
              </div> -->
              
            </div>
            
  </div>
  
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-circle iBannerFix"><img src="images/plus.png" width="80" height="80"></button>
  
      
      
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
  <!-- <script>
    const custom = [{"type":"decision","width":140,"height":90,"text":"EXP#1","extraLinesStroke":"#B8C6D6","strokeWidth":1,"fontSize":14,"lineHeight":14,"strokeDash":"0","fill":"#EEF1F6","stroke":"#B8C6D6","textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontColor":"#4C4C4C","x":320,"y":120,"fixed":false,"editable":true,"id":"u1672737726566","strokeType":"line"},
{"type":"circle","width":90,"height":90,"text":"PM Team(2)","extraLinesStroke":"#B8C6D6","strokeWidth":1,"fontSize":14,"lineHeight":14,"strokeDash":"0","fill":"#EEF1F6","stroke":"#B8C6D6","textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontColor":"#4C4C4C","x":530,"y":120,"fixed":false,"editable":true,"id":"u1672737728101","strokeType":"line"},
{"id":"u1672737728958","type":"line","points":[{"x":460,"y":165},{"x":530,"y":165}],"stroke":"#2196F3","connectType":"elbow","strokeWidth":2,"cornersRadius":0,"title":{"fontSize":14,"lineHeight":14,"textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontWeight":"normal","fontColor":"#4C4C4C","fill":"#FFF","draggable":true,"editable":true,"hidden":false},"width":70,"height":0,"x":460,"y":165,"customGap":0,"from":"u1672737726566","to":"u1672737728101","fromSide":"right","toSide":"left","forwardArrow":"filled"},
{"type":"start","width":127,"height":43,"text":"Start","extraLinesStroke":"#B8C6D6","strokeWidth":1,"fontSize":14,"lineHeight":14,"strokeDash":"0","fill":"#EEF1F6","stroke":"#B8C6D6","textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontColor":"#4C4C4C","x":330,"y":-90,"fixed":false,"editable":true,"id":"u1672737729882","strokeType":"line"},
{"type":"circle","width":101,"height":98,"text":"FS-STAFF","extraLinesStroke":"#B8C6D6","strokeWidth":1,"fontSize":14,"lineHeight":14,"strokeDash":"0","fill":"#EEF1F6","stroke":"#B8C6D6","textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontColor":"#4C4C4C","x":340,"y":-10,"fixed":false,"editable":true,"id":"u1672737735436","strokeType":"line"},
{"type":"circle","width":90,"height":90,"text":"SUPERVISOR","extraLinesStroke":"#B8C6D6","strokeWidth":1,"fontSize":14,"lineHeight":14,"strokeDash":"0","fill":"#EEF1F6","stroke":"#B8C6D6","textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontColor":"#4C4C4C","x":190,"y":120,"fixed":false,"editable":true,"id":"u1672737736003","strokeType":"line"},
{"id":"u1672737738365","type":"line","points":[{"x":320,"y":165},{"x":280,"y":165}],"stroke":"#2196F3","connectType":"elbow","strokeWidth":2,"cornersRadius":0,"title":{"fontSize":14,"lineHeight":14,"textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontWeight":"normal","fontColor":"#4C4C4C","fill":"#FFF","draggable":true,"editable":true,"hidden":false},"width":40,"height":0,"x":320,"y":165,"customGap":0,"from":"u1672737726566","to":"u1672737736003","fromSide":"left","toSide":"right","forwardArrow":"filled"},
{"type":"circle","width":90,"height":90,"text":"HR Team(1)","extraLinesStroke":"#B8C6D6","strokeWidth":1,"fontSize":14,"lineHeight":14,"strokeDash":"0","fill":"#EEF1F6","stroke":"#B8C6D6","textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontColor":"#4C4C4C","x":30,"y":120,"fixed":false,"editable":true,"id":"u1672737739077","strokeType":"line"},
{"type":"end","width":109,"height":47,"text":"End","extraLinesStroke":"#B8C6D6","strokeWidth":1,"fontSize":14,"lineHeight":14,"strokeDash":"0","fill":"#EEF1F6","stroke":"#B8C6D6","textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontColor":"#4C4C4C","x":20,"y":230,"fixed":false,"editable":true,"id":"u1672737739732","strokeType":"line"},
{"id":"u1672737740589","type":"line","points":[{"x":190,"y":165},{"x":120,"y":165}],"stroke":"#2196F3","connectType":"elbow","strokeWidth":2,"cornersRadius":0,"title":{"fontSize":14,"lineHeight":14,"textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontWeight":"normal","fontColor":"#4C4C4C","fill":"#FFF","draggable":true,"editable":true,"hidden":false},"width":70,"height":0,"x":190,"y":165,"customGap":0,"from":"u1672737736003","to":"u1672737739077","fromSide":"left","toSide":"right","forwardArrow":"filled"},
{"id":"u1672737741658","type":"line","points":[{"x":390.5,"y":88},{"x":390.5,"y":98},{"x":390.5,"y":110},{"x":390,"y":110},{"x":390,"y":120}],"stroke":"#2196F3","connectType":"elbow","strokeWidth":2,"cornersRadius":0,"title":{"fontSize":14,"lineHeight":14,"textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontWeight":"normal","fontColor":"#4C4C4C","fill":"#FFF","draggable":true,"editable":true,"hidden":false},"width":0.5,"height":32,"x":390.5,"y":88,"customGap":0,"from":"u1672737735436","to":"u1672737726566","fromSide":"bottom","toSide":"top","forwardArrow":"filled"},
{"id":"u1672737742582","type":"line","points":[{"x":393.5,"y":-47},{"x":393.5,"y":-37},{"x":393.5,"y":-20},{"x":390.5,"y":-20},{"x":390.5,"y":-10}],"stroke":"#2196F3","connectType":"elbow","strokeWidth":2,"cornersRadius":0,"title":{"fontSize":14,"lineHeight":14,"textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontWeight":"normal","fontColor":"#4C4C4C","fill":"#FFF","draggable":true,"editable":true,"hidden":false},"width":3,"height":37,"x":393.5,"y":-47,"from":"u1672737729882","to":"u1672737735436","fromSide":"bottom","toSide":"top","forwardArrow":"filled"},
{"id":"u1672737743872","type":"line","points":[{"x":75,"y":210},{"x":75,"y":220},{"x":74.5,"y":220},{"x":74.5,"y":230}],"stroke":"#2196F3","connectType":"elbow","strokeWidth":2,"cornersRadius":0,"title":{"fontSize":14,"lineHeight":14,"textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontWeight":"normal","fontColor":"#4C4C4C","fill":"#FFF","draggable":true,"editable":true,"hidden":false},"width":0.5,"height":20,"x":75,"y":210,"from":"u1672737739077","to":"u1672737739732","fromSide":"bottom","toSide":"top","forwardArrow":"filled"},
{"id":"u1672737744707","type":"line","points":[{"x":575,"y":210},{"x":575,"y":220},{"x":575,"y":252},{"x":235,"y":252},{"x":235,"y":210}],"stroke":"#2196F3","connectType":"elbow","strokeWidth":2,"cornersRadius":0,"title":{"fontSize":14,"lineHeight":14,"textAlign":"center","textVerticalAlign":"center","fontStyle":"normal","fontWeight":"normal","fontColor":"#4C4C4C","fill":"#FFF","draggable":true,"editable":true,"hidden":false},"width":340,"height":0,"x":575,"y":210,"customGap":42,"from":"u1672737728101","to":"u1672737736003","fromSide":"bottom","toSide":"bottom","forwardArrow":"filled"},
{"type":"text","width":51,"height":50,"text":"N","lineHeight":14,"fontSize":14,"fontColor":"rgba(0,0,0,0.70)","textAlign":"center","fontStyle":"normal","textVerticalAlign":"center","x":270,"y":120,"fixed":false,"editable":true,"id":"u1672737747865"},{"type":"text","width":90,"height":30,"text":"Y","lineHeight":14,"fontSize":14,"fontColor":"rgba(0,0,0,0.70)","textAlign":"center","fontStyle":"normal","textVerticalAlign":"center","x":450,"y":130,"fixed":false,"editable":true,"id":"u1672737750636"},
{"type":"text","width":4,"height":2,"text":"","lineHeight":14,"fontSize":14,"fontColor":"rgba(0,0,0,0.70)","textAlign":"center","fontStyle":"normal","textVerticalAlign":"center","x":460,"y":120,"fixed":false,"editable":true,"id":"u1672737753595"}]
  </script> -->
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