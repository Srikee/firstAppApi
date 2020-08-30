<?php
    include("config/autoload.php");
    
    $aaaa = $REQUEST->aaaa;

    $num = 10;

    echo json_encode(array(
        "data"=>"Hello world : ".$aaaa,
        "num"=>$num
    ));