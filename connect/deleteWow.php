<?php
    require_once '../connect/connect.php';

    $ID=$_POST['id'];
	
    if($ID!=''){
        $result = "DELETE FROM wow Where wow_ID='$ID' ";
        if($conn->query($result)==TRUE){
            echo json_encode(array("statusCode"=>200));
        }
        else {
            echo json_encode(array("statusCode"=>201));
        }
    }
    else{
        echo json_encode(array("statusCode"=>201));
    }

    mysqli_close($conn);
?>