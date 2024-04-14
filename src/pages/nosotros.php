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

      <?php
      incluirTemplate('more-about-us')
        ?>
    </main>

    <?php
      incluirTemplate('footer');
    ?>
   
  </body>
</html>
