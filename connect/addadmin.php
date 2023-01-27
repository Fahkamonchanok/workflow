<?php
require_once '../connect/connect.php';

//ประกาศตัวแปร รับค่าจากฟอร์ม
    
    $am_username = $_POST['am_username'];
    $am_password = $_POST['am_password'];
    $am_name = $_POST['am_name'];
    $am_surname = $_POST['am_surname'];
   
//insert into table
	if($am_name!='' && $am_surname!='' && $am_username!='' && $am_password!=''){
        $sql = "INSERT INTO `admin`(am_name,am_surname,am_username,am_password)
		VALUES('$am_name','$am_surname ','$am_username','$am_password')";
        
        $result = mysqli_query($conn, $sql)  or die ("Error in query: $sql " . mysqli_error($conn));

        if($result){
            echo json_encode(array("statusCode"=>200));
        }
        else {
            echo json_encode(array("statusCode"=>201));
        }
    }
    else{
        echo json_encode(array("statusCode"=>202));
    }
    
    mysqli_close($conn);
?>



