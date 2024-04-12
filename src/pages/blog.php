
<?php
   require "../../includes/funciones.php";
   incluirTemplate('header');
?>

    <main>
      <h1 class="text-4xl text-center my-5">Nuestro Blog</h1>
      <div class="flex justify-center">
        <div class="flex flex-col col-span-2 gap-10 max-w-[800px]">
          <article class="flex flex-row justify-center">
            <div class="items-center flex justify-end">
              <picture>
                <source srcset="../../build/img/blog1.jpg" type="image/jpeg" />
                <source srcset="../../build/img/blog1.webp" type="image/webp" />
                <img
                  src="../../build/img/blog1.jpg"
                  loading="lazy"
                  alt="Texto Entrada Blog"
                  class="min-w-64 h-48"
                />
              </picture>
            </div>

            <div class="flex">
              <a
                href="./entrada.php"
                class="flex flex-col gap-6 justify-center ms-5"
              >
                <h4
                  class="text-2xl after:border-green-400 after:border-[4px] after:border-solid after:w-[15rem] after:mt-5 after:block"
                >
                  Terraza en el techo de tu casa
                </h4>

                <p class="text-xl">
                  Escrito el:
                  <span class="text-yellow-500">20/10/2023</span> por:
                  <span class="text-yellow-500">Admin</span>
                </p>

                <p class="text-lg">
                  Consejos para construir una terraza en el techo de tu casa con
                  los mejores materiales y ahorrando dinero
                </p>
              </a>
            </div>
          </article>
          <article class="flex flex-row justify-center">
            <div class="items-center flex justify-end">
              <picture>
                <source srcset="../../build/img/blog2.jpg" type="image/jpeg" />
                <source srcset="../../build/img/blog2.webp" type="image/webp" />
                <img
                  src="./build/img/blog2.jpg"
                  loading="lazy"
                  alt="Texto Entrada Blog"
                  class="min-w-64 h-48"
                />
              </picture>
            </div>

            <div class="flex">
              <a
                href="./entrada.php"
                class="flex flex-col justify-center ms-5 gap-6"
              >
                <h4
                  class="text-2xl after:border-green-400 after:border-[4px] after:border-solid after:w-[15rem] after:mt-5 after:block"
                >
                  Guía para la decoración de tu hogar
                </h4>
                <p class="text-xl">
                  Escrito el:
                  <span class="text-yellow-500">20/10/2023</span> por:
                  <span class="text-yellow-500">Admin</span>
                </p>

                <p class="text-lg">
                  Maximiza el espacio en tu hogar con esta guia, aprende a
                  combinar muebles y colores para darle vida a tu espacio
                </p>
              </a>
            </div>
          </article>
          <article class="flex flex-row justify-center">
            <div class="items-center flex justify-end">
              <picture>
                <source srcset="../../build/img/blog4.jpg" type="image/jpeg" />
                <source srcset="../../build/img/blog4.webp" type="image/webp" />
                <img
                  src="../../build/img/blog4.jpg"
                  loading="lazy"
                  alt="Texto Entrada Blog"
                  class="min-w-64 h-48"
                />
              </picture>
            </div>

            <div class="flex">
              <a
                href="./entrada.php"
                class="flex flex-col gap-6 justify-center ms-5"
              >
                <h4
                  class="text-2xl after:border-green-400 after:border-[4px] after:border-solid after:w-[15rem] after:mt-5 after:block"
                >
                  Terraza en el techo de tu casa
                </h4>

                <p class="text-xl">
                  Escrito el:
                  <span class="text-yellow-500">20/10/2023</span> por:
                  <span class="text-yellow-500">Admin</span>
                </p>

                <p class="text-lg">
                  Consejos para construir una terraza en el techo de tu casa con
                  los mejores materiales y ahorrando dinero
                </p>
              </a>
            </div>
          </article>
          <article class="flex flex-row justify-center">
            <div class="items-center">
              <picture>
                <source srcset="../../build/img/blog3.jpg" type="image/jpeg" />
                <source srcset="../../build/img/blog3.webp" type="image/webp" />
                <img
                  src="../../build/img/blog3.jpg"
                  loading="lazy"
                  alt="Texto Entrada Blog"
                  class="min-w-64 h-48"
                />
              </picture>
            </div>

            <div class="flex">
              <a
                href="./entrada.php"
                class="flex flex-col gap-6 justify-center ms-5"
              >
                <h4
                  class="text-2xl after:border-green-400 after:border-[4px] after:border-solid after:w-[15rem] after:mt-5 after:block"
                >
                  Terraza en el techo de tu casa
                </h4>

                <p class="text-xl">
                  Escrito el:
                  <span class="text-yellow-500">20/10/2023</span> por:
                  <span class="text-yellow-500">Admin</span>
                </p>

                <p class="text-lg">
                  Consejos para construir una terraza en el techo de tu casa con
                  los mejores materiales y ahorrando dinero
                </p>
              </a>
            </div>
          </article>
        </div>
      </div>
    </main>
    <?php
    incluirTemplate('footer');
    ?>
  </body>
</html>
