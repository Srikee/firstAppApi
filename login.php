<?php
    include("config/autoload.php");
    
    $username = $REQUEST->username;
    $password = $REQUEST->password;
    
    $sql = "SELECT * FROM `user` WHERE username='".$username."' AND password='".$password."'";
    $rs = $DATABASE->QueryObj($sql);
    if( sizeof($rs)==1 ) {
        echo json_encode(array(
            "login"=>true,
            "user"=>$rs[0]
        ));
    } else {
        echo json_encode(array(
            "login"=>false
        ));
    }
    