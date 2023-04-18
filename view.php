<?php

include "./connect.php";

$stat=$con->prepare('SELECT * FROM `chat`');
$stat->execute();
$data= $stat->fetchAll(PDO::FETCH_ASSOC);
$count=$stat->rowCount();
if($count>0){
    echo json_encode(['status'=>'success','data'=>$data]);
}else{
    echo json_encode(['status'=>'failed']);
}


?>