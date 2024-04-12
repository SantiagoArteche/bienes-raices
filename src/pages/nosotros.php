<?php
   require "../../includes/funciones.php";
   incluirTemplate('header');
?>

    <main>
      <h1 class="text-center my-10 text-4xl">Conoce Sobre Nosotros</h1>
      <div class="grid grid-cols-1 xl:grid-cols-2 px-40">
        <div class="flex justify-center ">
          <picture>
            <source srcset="../../build/img/nosotros.jpg" type="image/jpeg" />
            <source srcset="../../build/img/nosotros.webp" type="image/webp" />
            <img
              src="../../build/img/nosotros.jpg"
              alt="nosotros"
              class="h-[35rem]"
            />
          </picture>
        </div>

        <div class="max-w-full xl:max-w-[500px] flex flex-col gap-8 ms-4">
          <blockquote class="text-2xl font-bold">
            25 Años de experiencia
          </blockquote>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet
            expedita esse quaerat tempora eaque, quos architecto fuga quasi
            pariatur? Nesciunt esse, corrupti veniam eos placeat repellendus
            aliquid illum optio quidem? Consequatur quae doloribus ad, eveniet
            id, repellat inventore nobis earum soluta numquam consequuntur
            sequi, libero cumque labore aliquam temporibus voluptate quo animi
            iure debitis eligendi? Sed eaque corrupti doloribus labore. Quos aut
            sed natus nostrum quaerat, debitis cum, commodi possimus beatae
            delectus officia temporibus unde maxime optio deserunt qui, dolor
            praesentium ea quasi quidem accusantium fuga voluptatem? Eveniet,
            nisi nemo.
          </p>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
            minus nulla quibusdam odit expedita deleniti, ex vitae voluptate id
            atque eligendi. Voluptatibus doloremque quas ipsum maxime
            exercitationem quisquam sit itaque.
          </p>
        </div>
      </div>

      <main class="my-8 px-20 xl:px-40">
        <h1 class="text-4xl text-center mb-10">Más sobre nosotros</h1>

        <div class="flex flex-col lg:flex-row justify-center gap-20">
          <div class="flex flex-col items-center gap-5">
            <img
              src="../../build/img/icono1.svg"
              alt="Icono seguridad"
              loading="lazy"
              class="h-32 w-32"
            />
            <h3 class="text-2xl">Seguridad</h3>
            <p class="text-center">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Blanditiis, ipsa totam corporis aliquid dolores, natus beatae
              quidem velit quae modi praesentium eligendi illo voluptate
              similique nemo! Dolorem odit dolor magnam.
            </p>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img
              src="../../build/img/icono2.svg"
              alt="Icono Precio"
              class="h-32 w-32"
              loading="lazy"
            />
            <h3 class="text-2xl">Precio</h3>
            <p class="text-center">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Blanditiis, ipsa totam corporis aliquid dolores, natus beatae
              quidem velit quae modi praesentium eligendi illo voluptate
              similique nemo! Dolorem odit dolor magnam.
            </p>
          </div>
          <div class="flex flex-col items-center gap-5">
            <img
              src="../../build/img/icono3.svg"
              alt="Icono Tiempo"
              loading="lazy"
              class="h-32 w-32"
            />

            <h3 class="text-2xl">Tiempo</h3>
            <p class="text-center">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Blanditiis, ipsa totam corporis aliquid dolores, natus beatae
              quidem velit quae modi praesentium eligendi illo voluptate
              similique nemo! Dolorem odit dolor magnam.
            </p>
          </div>
        </div>
      </main>
    </main>

    <?php
      incluirTemplate('footer');
    ?>
   
  </body>
</html>
