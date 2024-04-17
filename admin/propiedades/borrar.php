<?php 
require "../../includes/funciones.php";

$auth = userAuthenticated();

if(!$auth){
    header('Location: ../index.php');
}

incluirTemplate('header');

?>

<main class="flex flex-col gap-5 items-center">
    <h1 class="text-6xl my-5">Borrar</h1>
    <a href="../index.php" class="font-bold bg-green-500 p-4 text-white rounded">Volver</a>
</main>

<?php
    incluirTemplate('footer');
?>