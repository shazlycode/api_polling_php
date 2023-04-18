<?php

include "./connect.php";

$username=htmlspecialchars(strip_tags($_POST['username']));
$message=htmlspecialchars(strip_tags($_POST['message']));

$stat=$con->prepare('INSERT INTO `chat` (`username`,`message`)VALUES(?,?)');
$stat->execute([$username, $message]);
$count=$stat->rowCount();
if($count>0){
    echo json_encode(['status'=>'success']);
}else{
    echo json_encode(['status'=>'failed']);

}






?>