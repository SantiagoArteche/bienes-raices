<?php
   require "../../includes/funciones.php";
   incluirTemplate('header');
?>

    <main class="flex flex-col items-center">
      <h1 class="text-4xl text-center pb-10 pt-8">
        Guía Para la Decoración de tu Hogar
      </h1>

      <p class="text-xl mb-5 w-full text-left max-w-[60rem]">
        Escrito el:
        <span class="text-yellow-500">20/10/2023</span> por:
        <span class="text-yellow-500">Admin</span>
      </p>
      <div class="max-w-[60rem]">
        <picture class="flex justify-center items-center">
          <source srcset="../../build/img/destacada2.jpg" type="image/jpeg" />
          <source srcset="../../build/img/destacada2.webp" type="image/webp" />
          <img
            loading="lazy"
            src="../../build/img/destacada2.jpg"
            alt="casa frente al bosque"
            class="w-full h-[31rem]"
          />
        </picture>

        <div class="flex flex-col gap-8">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima
            aliquid temporibus architecto, culpa quaerat in voluptatum
            reprehenderit quasi eius distinctio molestiae quo hic, ea voluptas
            explicabo? Culpa officia id nam. Perspiciatis, dolore mollitia.
            Assumenda distinctio, neque temporibus eligendi nam accusantium est
            excepturi maiores quaerat reprehenderit tenetur nulla, quasi aliquid
            facilis, esse odio. Ratione sint iste id modi delectus vitae facere.
            Eos, sed ex! Sequi, aliquid blanditiis! Deserunt illum aperiam
            molestiae ipsam culpa ad optio sapiente ullam eaque. Nostrum dolorum
            alias nisi sit delectus assumenda quam ex iste, iusto, eaque sint.
            Rem commodi, doloremque omnis eum debitis impedit eligendi facilis?
            Officia maiores quas qui debitis eaque accusamus? Voluptatem, autem
            id expedita fuga dolorum praesentium sit veniam vero, hic repellat,
            dolore provident.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus
            atque eos tempore numquam unde eveniet fugiat voluptas, illo quae
            itaque sit ipsam nam optio dignissimos deserunt tenetur ducimus
            delectus voluptatem? Ratione autem corporis expedita illum at
            molestiae dignissimos facere cum? Non tenetur doloribus atque nobis
            ipsum dolores provident libero porro repudiandae illo? Sunt
            recusandae amet sequi! Dolorem aliquam ab voluptatibus?
          </p>
        </div>
      </div>
    </main>

    <?php
    incluirTemplate('footer');
    ?>
 
  </body>
</html>
