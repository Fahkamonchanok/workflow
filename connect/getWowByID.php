<?php
    require_once '../connect/connect.php';

    $ID=$_POST['id'];
	
    if($ID){
        $result = "SELECT * FROM wow WHERE wow_id='$ID'";

        $sth = mysqli_query($conn, $result);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }

        if(count($rows) > 0){
                echo json_encode(array("statusCode"=>200, "data"=>$rows));
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