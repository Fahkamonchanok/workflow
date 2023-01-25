<?php 


$connect = mysqli_connect('localhost:3307','root','','workflow');
if(mysqli_connect_error($connect)){
    echo "connect : fail";
}



function redirect($page, $status)
{
    $_SESSION['status'] = "$status";
    header("Location: $page");
    exit(0);
}

?>