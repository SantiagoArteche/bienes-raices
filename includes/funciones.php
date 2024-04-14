<?php

require 'app.php';

function incluirTemplate($nombre, $inicio = false, $admin = false){
    include TEMPLATES_URL . "/$nombre.php";
}
?>