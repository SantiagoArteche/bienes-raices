<?php
require "./includes/funciones.php";
incluirTemplate('header', true);
incluirTemplate('more-about-us', true);

?>

    <section class="casasYDepas">
      <h2 class="text-4xl text-center py-10">Casas y Departamentos en Venta</h2>

     <?php
     incluirTemplate('anuncios', true,  false, 3);
    ?>

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

   <?php
  incluirTemplate('footer', true)
?>
  
  </body>
</html>
