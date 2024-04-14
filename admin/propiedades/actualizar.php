<?php 
require "../../includes/config/database.php";

$idParam = filter_var($_GET['id'], FILTER_VALIDATE_INT);

if(!$idParam){
    header('Location: ../index.php');
}

$db = connectDB();

$queryId = "SELECT * FROM estates WHERE id = $idParam;";

$outcomeProperty = mysqli_query($db, $queryId);

$property = mysqli_fetch_assoc($outcomeProperty);


$errors = [];

$title = $property['title'];
$price = $property['price'];
$description = $property['description'];
$wc = $property['wc'];
$rooms = $property['rooms'];
$parking = $property['parking'];
$sellers_id = $property['sellers_id'];
$img = $property['img'];



$querySeller = "SELECT * FROM sellers";

$sellerOutcome = mysqli_query($db, $querySeller);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $title = mysqli_real_escape_string($db, $_POST['title']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $rooms = mysqli_real_escape_string($db, $_POST['rooms']);
    $parking = mysqli_real_escape_string($db, $_POST['parking']);
    $sellers_id = mysqli_real_escape_string($db, $_POST['sellers_id']);
    $createdAt = date('Y/m/d');
    $img = $_FILES['img'];

    if(!$title){
        $errors[] = 'Debes añadir un titulo';
    }

    if(!$price){
        $errors[] = 'Debes añadir un precio';
    }

    if(!$description && strlen($description) < 40){
        $errors[] = "La descripción es obligatoria y debe tener al menos 40 caracteres";
    }

    if(!$wc && !$rooms && !$parking){
        $errors[] = "Debe especificar la cantidad de baños, habitaciones y estacionamientos"; 
    }

    if($outcome){
        echo "inserted correctly";
    }

    if(!$sellers_id){
        $errors[] = 'Debe escoger un vendedor';
    }

    $measure = 2000 * 1000;

    if($img['size'] > $measure){
        $errors[] = 'La imagen es muy pesada';
    }

    if(empty($errors)){

        $imgFolder = '../../img';

        if(!is_dir($imgFolder)){
            mkdir($imgFolder);
        }

        $imgName = '';
        if($img['name']){
            unlink($imgFolder . $property['img']);

            $imgName = md5( uniqid( rand(), true ) ) . ".jpg";

            move_uploaded_file($img['tmp_name'], $imgFolder . "/" . $imgName);
        }else{
            $imgName = $img['name'];
        }

     

    

    $query = "UPDATE estates SET title = '$title', price = '$price', img = '$img', description = '$description', rooms = $rooms, wc = $wc, parking = $parking, sellers_id = $sellers_id WHERE id = $idParam ;";

    $outcome = mysqli_query($db, $query);

    if($outcome){
        header('Location: ../../admin/index.php?resultado=2');
    }

    }

   
}

require "../../includes/funciones.php";
incluirTemplate('header');


?>

<main class="flex flex-col gap-5 items-center">
    <h1 class="text-6xl my-5">Actualizar Propiedad</h1>
 



    <div class="flex flex-col gap-5">
<?php    
    foreach($errors as $error){
        echo "<h1 class='text-xl bg-red-600 p-3 text-center rounded-xl '>$error !</h1>";
    }
?></div>

    <form id="admin" method="POST" class="flex flex-col gap-5 min-w-[400px] lg:min-w-[800px]" enctype="multipart/form-data">
        <fieldset class="border-[2px] border-gray-700 p-5 flex flex-col ">
            <legend>Información General</legend>

            <label for="title">Titulo:</label>
            <input value="<?php echo $title; ?>" type="text" id="title" name="title" placeholder="Titulo Propiedad" class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

            <label for="price">Precio:</label>
            <input value="<?php echo $price; ?>" type="text" id="price" name="price" placeholder="Precio Propiedad" class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

            <label for="img">Imagen:</label>
            <input type="file" id="img" name="img" multiple accept="image/jpeg, image/png" class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-white ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">


            <img src="../../img/<?php echo $img; ?>" class="h-[500px] w-full"/>
            <label for="description">Descripción:</label>
            <textarea  id="description" name="description" class="block rounded-md h-48 border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </fieldset>

        <fieldset class="border-[2px] border-gray-700 p-5 flex flex-col">
            <legend>Información Propiedad</legend>

            <label for="rooms">Habitaciones:</label>
            <input value="<?php echo $rooms; ?>" class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="number" id="rooms" name="rooms" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input value="<?php echo $wc; ?>" class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="parking">Estacionamiento:</label>
            <input value="<?php echo $parking; ?>" class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" id="parking" name="parking" placeholder="Ej: 3" min="1" max="9">
        </fieldset>

        <fieldset class="border-[2px] border-gray-700 p-5 flex flex-col gap-3">
            <legend>Vendedor</legend>
            <select
                name="sellers_id"
                id="sellers_id"
                class="h-full rounded-md py-3 border-2 border-black bg-transparent pl-2 pr-7 text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-md"
               
              >
                <option value="" disabled selected>-- Seleccione --</option>
                <?php while($row = mysqli_fetch_assoc($sellerOutcome)) : ?>
                    <option class="" <?php echo $sellers_id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
                <?php endwhile; ?>
              </select>

            
           
        </fieldset>

        <div class="flex  justify-center">
        <input type="submit" value="Actualizar Propiedad" class="font-bold bg-green-500 p-4 text-white rounded min-w-[400px] max-w-[700px] text-center">
        </div>
    </form>

    <a href="../index.php" class="font-bold bg-green-500 p-4 text-white rounded">Volver</a>
</main>


<?php
    incluirTemplate('footer');
?>