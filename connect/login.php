<?php
    require_once '../connect/connect.php';

    $USERNAME=$_POST['username'];
    $PASSWORD=$_POST['password'];
	
    if($USERNAME!='' && $PASSWORD!=''){
        $result = "SELECT * FROM admin WHERE am_username='$USERNAME' AND am_password='$PASSWORD'";

        $sth = mysqli_query($conn, $result);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }

        if(count($rows) > 0){
            $token = bin2hex(random_bytes(16));

            $id = $rows[0]["am_ID"];
            // echo $id;
            $sql = "UPDATE admin SET token='$token' WHERE am_ID='$id'";
            $result2 = mysqli_query($conn, $sql);
	        if ($result2) {
                echo json_encode(array("statusCode"=>200, "data"=>$rows, "token"=>$token));
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