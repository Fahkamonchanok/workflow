<?php
 require_once '../connect/connect.php';
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$USERNAME = $_POST['username'];
    $PASSWORD = $_POST['password'];
    $ID = $_POST['id'];
    $POSITION = $_POST['position'];
    $FIRSTNAME = $_POST['firstname'];
    $LASTNAME = $_POST['lastname']; 
    $TEL = $_POST['tel'];
    $EMAIL = $_POST['email'];
	
	if($USERNAME!='' && $PASSWORD!='' && $FIRSTNAME!='' && $LASTNAME!='' && $TEL!=''&& $ID!=''&& $POSITION!=''){
    $sql = "INSERT INTO `user`( `username`, `password`,`id`, `position`,`firstname`, `lastname`, `tel`, `email`)
        VALUES('$USERNAME','$PASSWORD','$ID','$POSITION','$FIRSTNAME','$LASTNAME','$TEL','$EMAIL')";
        
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
