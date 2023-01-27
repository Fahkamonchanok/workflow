<?php
require_once '../connect/connect.php';

//ประกาศตัวแปร รับค่าจากฟอร์ม
    $wf_code = $_POST['wf_code'];
    $wow_name = $_POST['wow_name'];
    $wf_description = $_POST['wf_description'];
    $wf_effective = $_POST['wf_effective'];
    $wf_end = $_POST['wf_end'];
    $CREATEBY = $_POST['createBy'];
   
//insert into table
	if($wf_code!='' && $wow_name!='' && $wf_description!='' && $wf_effective!='' && $wf_end!=''){
        $sql = "INSERT INTO `workflow`(wf_code,wow_name,wf_description,wf_effective,wf_end,update_by)
		VALUES('$wf_code','$wow_name ','$wf_description','$wf_effective','$wf_end','$CREATEBY')";
        
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



