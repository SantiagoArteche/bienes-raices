

<?php
  require "../../includes/funciones.php";
  incluirTemplate('header');

  require "../../includes/config/database.php";

  $db = connectDB();


  $errors = [];
  if($_SERVER['REQUEST_METHOD'] === "POST"){

  
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) );
    $password = mysqli_real_escape_string($db, $_POST['password']);



    if(!$email){
        $errors[] = "El email es obligatorio o no es válido";
    }
    if(!$password){
        $errors[] = "El password es obligatorio";
    }


    if(empty($errors)){
        $query = " SELECT * FROM users WHERE email = '$email' ";

        $response = mysqli_query($db, $query);

        if($response->num_rows){

            $user = mysqli_fetch_assoc($response);

            $auth = password_verify($password, $user['password']);

            if($auth){

                session_start();

                $_SESSION['user'] = $user['email'];

                $_SESSION['login'] = true;

                header('Location: ../../admin/index.php');

            }else{
                $errors[] = "Contraseña incorrecta";
            }

        }else{
            $errors[] = "El usuario no existe";
        }
    }
    



  }

?>


<main class="w-full flex flex-col justify-center items-center">
    <h1 class="text-4xl text-center my-5">Iniciar Sesión</h1>

    <div class="flex flex-col gap-5 my-5">
<?php    
    foreach($errors as $error){
        echo "<h1 class='text-xl bg-red-600 p-3 text-center rounded-xl '>$error !</h1>";
    }
?></div>
    <form method="POST" class="lg:min-w-[700px] my-5">
    <fieldset class="border-[2px] border-gray-700 p-5 flex flex-col">
            <legend class="text-2xl">Información Personal</legend>

            <label for="email" class="my-2">Email</label>
            <input
              class="block rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              type="email"
              name="email"
              placeholder="Tu Email"
            />
            <label for="password" class="my-2">Contraseña</label>
            <input
              class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              type="tel"
              name="password"
              placeholder="Tu Contraseña"
            />
          </fieldset>
          <button
            type="submit"
            value="Enviar"
            class="mt-3  bg-green-700 font-bold text-white py-2 px-5 "
          >
            Enviar
          </button>

    </form>
</main>




    <?php
    incluirTemplate('footer')
    ?>
  </body>
</html>

