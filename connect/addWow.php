<?php
include 'connect.php';

//ประกาศตัวแปร รับค่าจากฟอร์ม
    $wow_name = $_POST['wow_name'];
   
//insert into table
	if($wow_name!=''){
        $sql = "INSERT INTO `wow`(wow_name)
		VALUES('$am_name')";
        
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



