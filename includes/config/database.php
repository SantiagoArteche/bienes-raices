<?php

function connectDB() : mysqli{
    $db = mysqli_connect("localhost", 'root', 'santimysql', 'bienes_raices');

    if(!$db){
        echo 'Not connected';
        exit;
    }

    return $db;
}

?>