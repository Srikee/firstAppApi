<?php
    header('Access-Control-Allow-Origin: *');
    
    $num = 10;




    echo json_encode(array(
        "data"=>"Hello world",
        "num"=>$num
    ));