<?php

require 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false, bool $admin = false, int $limit = 0){
    include TEMPLATES_URL . "/$nombre.php";
}


function userAuthenticated(): bool{
    session_start();

    $auth = $_SESSION['login']; 

    if($auth){
        return true;
    }
    return false;
}


?>