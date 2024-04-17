<?php 
require "../includes/funciones.php";

$auth = userAuthenticated();

if(!$auth){
    header('Location: ./index.php');
}

incluirTemplate('header', false, true);

$mensaje = $_GET['resultado'] ?? null;

require "../includes/config/database.php";

$db = connectDB();

$query = "SELECT * FROM estates;";


$outcome = mysqli_query($db, $query);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){
        $queryDelete = "SELECT img FROM estates WHERE id = $id;";

        $outcomeDelete = mysqli_query($db, $queryDelete);

        $property = mysqli_fetch_assoc($outcomeDelete);

        unlink("../img/" . $property['img']);

        $queryDelete = "DELETE FROM estates WHERE id = $id;";

        $outcomeDelete = mysqli_query($db, $queryDelete);

        if($outcomeDelete){
            header('Location: ./index.php?resultado=3');
        }
    }
   
}



?>

<main class="flex flex-col gap-5 items-center px-10 ">
    <h1 class="text-6xl">Administrador de Bienes Raices</h1>

    <?php  
    if($mensaje === '1'){
       echo "<h1 class='text-center px-3 py-5 rounded-xl text-5xl my-5 bg-green-700 max-w-[400px]'> Anuncio Creado Correctamente!  </h1>"; 
    }else if($mensaje === '2'){
        echo "<h1 class='text-center px-3 py-5 rounded-xl text-5xl my-5 bg-green-700 max-w-[400px]'> Anuncio Actualizado Correctamente!  </h1>"; 
    }else if($mensaje === '3'){
        echo "<h1 class='text-center px-3 py-5 rounded-xl text-5xl my-5 bg-green-700 max-w-[400px]'> Anuncio Eliminado Correctamente!  </h1>"; 
    }
    ?>

<a href="../admin/propiedades/crear.php" class="font-bold bg-green-500 p-4 my-5 text-white rounded">Nueva Propiedad</a>

<table class="mt-[4rem] w-full border-spacing-0 max-w-[1600px] ">
    <thead class="bg-green-500">
        <tr class="text-white p-[2rem]">       
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

    <?php while($row = mysqli_fetch_assoc($outcome)) : ?>

        <tr class="flex-1 text-center h-full">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td class="flex h-[100%]  justify-center"><img src="../img/<?php echo $row['img']; ?>" class="w-[100px] mt-8" alt="newImage"></td>
            <td>$<?php echo $row['price']; ?></td>
            <td>
            <form method="POST" class="w-full">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
            <input type="submit" class="block bg-red-600 text-white p-3 my-4 rounded-xl text-center w-full" value="Eliminar">
            </form>
               
            <a href="../admin/propiedades/actualizar.php?id=<?php echo $row['id']; ?>" class="block bg-green-600 text-white p-3 my-4 rounded-xl text-center">Actualizar</a>
            </td>
        </tr>

        <?php endwhile; ?>
    </tbody>
</table>
 
  
</main>

<?php
    incluirTemplate('footer', false,true);
?>