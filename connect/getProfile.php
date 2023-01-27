<?php
    require_once '../connect/connect.php';

    $TOKEN=$_POST['token'];

    if($TOKEN!=''){
        $result = "SELECT * FROM admin WHERE token='$TOKEN'";

        $sth = mysqli_query($conn, $result);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }

        if(count($rows) > 0){
            $token = bin2hex(random_bytes(16));
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