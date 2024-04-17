<?php
  if(!isset($_SESSION)){
    session_start();
  }

  $auth = $_SESSION['login'] ?? false;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href=<?php 
    if($inicio){
      echo "./build/output.css";
    }else if($admin){
      echo "../build/output.css";
    }else{
      echo "../../build/output.css";
    }
    ?> />
    <title>Bienes Raices</title>
  </head>
  <body>
    <header class="pt-4 <?php echo $inicio ? "pb-12 bg-[url(./img/header.jpg)] bg-cover bg-no-repeat bg-bottom min-h-[25rem] sm:min-h-[35rem]" : "bg-slate-700"; ?> ">
      <div class="flex flex-col justify-between  <?php echo $inicio ? "min-h-[25rem] sm:min-h-[35rem]" : "" ?> ">
        <div class="flex sm:flex-row flex-col justify-around items-center mb-5">
          <a href="<?php  
          if($inicio){
            echo "./index.php";
          }else if ($admin){
            echo "../index.php";
          }else{
            echo "../../index.php";
          }  ?>">
            <img src= "<?php  
            if($inicio){
            echo "./build/img/logo.svg";
            }else if ($admin){
              echo  "../build/img/logo.svg";
            }else{
             echo "../../build/img/logo.svg";
            } ?>" class="w-full h-full" alt="" />
          </a>
          <div class="flex sm:hidden hamburguer">
            <img
              src="<?php 
              if($inicio){
                echo "./build/img/barras.svg";
                }else if ($admin){
                  echo  "../build/img/barras.svg";
                }else{
                 echo "../../build/img/barras.svg";
                }
              ?>"
              class="w-[5rem] cursor-pointer"
              alt="menu responsive"
            />
          </div>

          <div class="flex flex-col-reverse items-center sm:items-end">
            <nav
              class="text-white gap-7 hidden sm:flex-row sm:flex navigation sm:text-[17px] text-2xl"
            >
              <a href="<?php 
              if($inicio){
                echo "./src/pages/nosotros.php";
                }else if ($admin){
                  echo  "../src/pages/nosotros.php";
                }else{
                 echo "../../src/pages/nosotros.php";
                }
              ?>"
               class="hover:text-green-700"
                >Nosotros</a
              >
              <a href="<?php 
              if($inicio){
                echo "./src/pages/anuncios.php";
                }else if ($admin){
                  echo  "../src/pages/anuncios.php";
                }else{
                 echo "../../src/pages/anuncios.php";
                }
              ?>" class="hover:text-green-700"
                >Anuncios</a
              >
              <a href="<?php 
              if($inicio){
                echo "./src/pages/blog.php";
                }else if ($admin){
                  echo  "../src/pages/blog.php";
                }else{
                 echo "../../src/pages/blog.php";
                }
              ?>" class="hover:text-green-700">Blog</a>
              <a href="<?php 
              if($inicio){
                echo "./src/pages/contacto.php";
                }else if ($admin){
                  echo  "../src/pages/contacto.php";
                }else{
                 echo "../../src/pages/contacto.php";
                }
              ?>" class="hover:text-green-700"
                >Contacto</a
              ><?php if($auth): ?>
            <a href="<?php 
                 if($inicio){
                  echo './src/pages/logout.php';
                  }else if ($admin){
                    echo  '../src/pages/logout.php';
                  }else{
                   echo '../../src/pages/logout.php';
                  } ?>"
             >Cerrar Sesión</a>
             <?php endif; ?>
              
            </nav>
            <img
              src="<?php 
              if($inicio){
                echo "./build/img/dark-mode.svg";
                }else if ($admin){
                  echo  "../build/img/dark-mode.svg";
                }else{
                 echo "../../build/img/dark-mode.svg";
                }
              ?>"
                 
              alt="darkmode"
              class="text-white w-10 my-3 sm:my-0 sm:mb-3 hidden sm:block darkMode invert cursor-pointer"
            />
          </div>
        </div>

        <?php
  if ($inicio) {
    echo "<h1 class=\"text-3xl ms-20 sm:ms-30 max-w-[500px] leading-[3.2rem] text-white\"> Venta de Casas y Departamentos Exclusivos de Lujo </h1>";
    }
    ?>

      </div>
    </header>