<?php
    require_once '../connect/connect.php';

    $ID=$_POST['idLogin'];
	
    if($ID!=''){
        $result = "SELECT * FROM admin WHERE am_ID='$ID'";

        $sth = mysqli_query($conn, $result);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }

        if(count($rows) > 0){
            $id = $rows[0]["am_ID"];
            $sql = "UPDATE admin SET token='' WHERE am_ID='$id'";
            $result2 = mysqli_query($conn, $sql);
	        if ($result2) {
                echo json_encode(array("statusCode"=>200));
            }
            else{
                echo json_encode(array("statusCode"=>201));
            }
        }
        else{
            echo json_encode(array("statusCode"=>201));
        }
    }
    else{
        echo json_encode(array("statusCode"=>201));
    }

    mysqli_close($conn);
?>