<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./build/output.css" />
    <title>Bienes Raices</title>
  </head>
  <body>
    <header
      class="pt-4 pb-12 bg-[url(./img/header.jpg)] bg-cover bg-no-repeat bg-bottom min-h-[25rem] sm:min-h-[35rem]"
    >
      <div class="flex flex-col justify-between min-h-[25rem] sm:min-h-[35rem]">
        <div class="flex sm:flex-row flex-col justify-around items-center mb-5">
          <a href="./index.php">
            <img src="./build/img/logo.svg" class="w-full h-full" alt="" />
          </a>

          <div class="flex sm:hidden hamburguer">
            <img
              src="./build/img/barras.svg"
              class="w-[5rem] cursor-pointer"
              alt="menu responsive"
            />
          </div>

          <div class="flex flex-col-reverse items-center sm:items-end">
            <nav
              class="text-white gap-7 hidden sm:flex-row sm:flex navigation sm:text-[16px] text-2xl"
            >
              <a href="./src/pages/nosotros.php" class="hover:text-green-700"
                >Nosotros</a
              >
              <a href="./src/pages/anuncios.php" class="hover:text-green-700"
                >Anuncios</a
              >
              <a href="./src/pages/blog.php" class="hover:text-green-700"
                >Blog</a
              >
              <a href="./src/pages/contacto.php" class="hover:text-green-700"
                >Contacto</a
              >
            </nav>
            <img
              src="./build/img/dark-mode.svg"
              alt="darkmode"
              class="text-white w-10 my-3 sm:my-0 sm:mb-3 hidden sm:block darkMode invert cursor-pointer"
            />
          </div>
        </div>
        <h1 class="text-3xl ms-20 max-w-[500px] leading-[3.2rem] text-white">
          Venta de Casas y Departamentos Exclusivos de Lujo
        </h1>
      </div>
    </header>

    <main class="my-8 px-20 xl:px-40">
      <h1 class="text-4xl text-center mb-10">Más sobre nosotros</h1>

      <div class="flex flex-col lg:flex-row justify-center gap-20">
        <div class="flex flex-col items-center gap-5">
          <img
            src="./build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
            class="h-32 w-32"
          />
          <h3 class="text-2xl">Seguridad</h3>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Blanditiis, ipsa totam corporis aliquid dolores, natus beatae quidem
            velit quae modi praesentium eligendi illo voluptate similique nemo!
            Dolorem odit dolor magnam.
          </p>
        </div>
        <div class="flex flex-col items-center gap-5">
          <img
            src="./build/img/icono2.svg"
            alt="Icono Precio"
            class="h-32 w-32"
            loading="lazy"
          />
          <h3 class="text-2xl">Precio</h3>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Blanditiis, ipsa totam corporis aliquid dolores, natus beatae quidem
            velit quae modi praesentium eligendi illo voluptate similique nemo!
            Dolorem odit dolor magnam.
          </p>
        </div>
        <div class="flex flex-col items-center gap-5">
          <img
            src="./build/img/icono3.svg"
            alt="Icono Tiempo"
            loading="lazy"
            class="h-32 w-32"
          />

          <h3 class="text-2xl">Tiempo</h3>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Blanditiis, ipsa totam corporis aliquid dolores, natus beatae quidem
            velit quae modi praesentium eligendi illo voluptate similique nemo!
            Dolorem odit dolor magnam.
          </p>
        </div>
      </div>
    </main>

    <section class="casasYDepas">
      <h2 class="text-4xl text-center py-10">Casas y Departamentos en Venta</h2>

      <div class="flex justify-center px-10">
        <div class="grid grid-cols-3 w-[1200px] gap-10">
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="./build/img/anuncio1.jpg" type="image/jpeg" />
              <source srcset="./build/img/anuncio1.webp" type="image/webp" />
              <img
                loading="lazy"
                src="./build/img/anuncio1.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa de Lujo en el Lago
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./src/pages/anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="./build/img/anuncio2.jpg" type="image/jpeg" />
              <source srcset="./build/img/anuncio2.webp" type="image/webp" />
              <img
                loading="lazy"
                src="./build/img/anuncio2.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa Terminados de Lujo
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./src/pages/anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="./build/img/anuncio3.jpg" type="image/jpeg" />
              <source srcset="./build/img/anuncio3.webp" type="image/webp" />
              <img
                loading="lazy"
                src="./build/img/anuncio3.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa con Alberca
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="./build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./src/pages/anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-14 mb-5">
        <a
          href="./src/pages/anuncios.php"
          class="font-bold bg-green-500 p-4 text-white"
          >Ver Todas</a
        >
      </div>
    </section>

    <section
      class="bg-[url(./img/encuentra.jpg)] bg-cover bg-no-repeat bg-center flex flex-col gap-20 items-center p-20 text-white"
    >
      <h2 class="text-4xl">Encuentra la casa de tus sueños</h2>
      <p class="text-xl">
        Llena el formulario de contacto y un asesor se contactará contigo en la
        brevedad
      </p>
      <a href="./src/pages/contacto.html" class="bg-orange-700 p-3 font-bold"
        >Contactános</a
      >
    </section>

    <div class="grid grid-cols-3">
      <section class="flex flex-col col-span-2">
        <h3 class="text-4xl my-10 text-center">Nuestro Blog</h3>
        <article class="grid grid-cols-2">
          <div class="items-center flex justify-end">
            <picture>
              <source srcset="./build/img/blog1.jpg" type="image/jpeg" />
              <source srcset="./build/img/blog1.webp" type="image/webp" />
              <img
                src="./build/img/blog1.jpg"
                loading="lazy"
                alt="Texto Entrada Blog"
                class="w-full h-48"
              />
            </picture>
          </div>

          <div class="flex">
            <a
              href="./src/pages/entrada.php"
              class="flex flex-col gap-6 justify-center ms-5"
            >
              <h4
                class="text-2xl after:border-green-400 after:border-[4px] after:border-solid after:w-[15rem] after:mt-5 after:block"
              >
                Terraza en el techo de tu casa
              </h4>

              <p class="text-xl">
                Escrito el: <span class="text-yellow-500">20/10/2023</span> por:
                <span class="text-yellow-500">Admin</span>
              </p>

              <p class="text-lg">
                Consejos para construir una terraza en el techo de tu casa con
                los mejores materiales y ahorrando dinero
              </p>
            </a>
          </div>
        </article>
        <article class="grid grid-cols-2 mt-10">
          <div class="items-center flex justify-end">
            <picture>
              <source srcset="./build/img/blog2.jpg" type="image/jpeg" />
              <source srcset="./build/img/blog2.webp" type="image/webp" />
              <img
                src="./build/img/blog2.jpg"
                loading="lazy"
                alt="Texto Entrada Blog"
                class="w-full h-48"
              />
            </picture>
          </div>

          <div class="flex">
            <a
              href="./src/pages/entrada.php"
              class="flex flex-col justify-center ms-5 gap-6"
            >
              <h4
                class="text-2xl after:border-green-400 after:border-[4px] after:border-solid after:w-[15rem] after:mt-5 after:block"
              >
                Guía para la decoración de tu hogar
              </h4>
              <p class="text-xl">
                Escrito el: <span class="text-yellow-500">20/10/2023</span> por:
                <span class="text-yellow-500">Admin</span>
              </p>

              <p class="text-lg">
                Maximiza el espacio en tu hogar con esta guia, aprende a
                combinar muebles y colores para darle vida a tu espacio
              </p>
            </a>
          </div>
        </article>
      </section>

      <section class="flex flex-col items-center">
        <h3 class="text-4xl my-10 text-center">Testimoniales</h3>
        <div
          class="w-[450px] flex flex-col justify-center items-center bg-green-700 opacity-90 rounded-xl"
        >
          <blockquote
            class="text-white relative leading-[50px] text-xl max-w-[250px] px-10 py-5 before:bg-[url(./img/comilla.svg)] before:bg-no-repeat before:w-16 before:h-24 before:absolute before:-left-10 before:block"
          >
            El personal se comportó de una excelente forma, muy buena atención y
            la casa que me ofrecieron cumple con todas mis expectativas.
          </blockquote>
          <p class="text-white text-lg font-bold text-end w-full pr-5 pb-5">
            - Santiago Arteche
          </p>
        </div>
      </section>
    </div>

    <footer class="mt-8 bg-gray-700 p-4 text-white">
      <div>
        <nav class="mb-5 gap-10 flex justify-center">
          <a href="./src/pages/nosotros.php">Nosotros</a>
          <a href="./src/pages/anuncios.php">Anuncios</a>
          <a href="./src/pages/blog.php">Blog</a>
          <a href="./src/pages/contacto.php">Contacto</a>
        </nav>
      </div>
      <p class="text-xl text-center">
        Todos los derechos reservados 2024 &copy;
      </p>
    </footer>

    <script src="./build/index.js"></script>
  </body>
</html>
