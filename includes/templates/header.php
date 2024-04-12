<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../build/output.css" />
    <title>Bienes Raices</title>
  </head>
  <body>
    <header class="pt-4 bg-slate-700">
      <div class="flex flex-col justify-between">
        <div class="flex sm:flex-row flex-col justify-around items-center mb-5">
          <a href="../../index.php">
            <img src="../../build/img/logo.svg" class="w-full h-full" alt="" />
          </a>
          <div class="flex sm:hidden hamburguer">
            <img
              src="../../build/img/barras.svg"
              class="w-[5rem] cursor-pointer"
              alt="menu responsive"
            />
          </div>

          <div class="flex flex-col-reverse items-center sm:items-end">
            <nav
              class="text-white gap-7 hidden sm:flex-row sm:flex navigation sm:text-[16px] text-2xl"
            >
              <a href="../../src/pages/nosotros.php" class="hover:text-green-700"
                >Nosotros</a
              >
              <a href="../../src/pages/anuncios.php" class="hover:text-green-700"
                >Anuncios</a
              >
              <a href="../../src/pages/blog.php" class="hover:text-green-700">Blog</a>
              <a href="../../src/pages/contacto.php" class="hover:text-green-700"
                >Contacto</a
              >
            </nav>
            <img
              src="../../build/img/dark-mode.svg"
              alt="darkmode"
              class="text-white w-10 my-3 sm:my-0 sm:mb-3 hidden sm:block darkMode invert cursor-pointer"
            />
          </div>
        </div>
      </div>
    </header>