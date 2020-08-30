<?php
    include("config/autoload.php");
    
    $user_id = $REQUEST->user_id;
    
    $sql = "SELECT * FROM `user` WHERE user_id='".$user_id."' ";
    $rs = $DATABASE->QueryObj($sql);

    echo json_encode(array(
        "data"=>$rs[0]
    ));