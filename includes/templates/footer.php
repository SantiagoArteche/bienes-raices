<footer class="mt-8 bg-gray-700 p-4 text-white">
      <div>
        <nav class="mb-5 gap-10 flex justify-center">
          <a href="<?php echo $inicio ? "./src/pages/nosotros.php" : "../../src/pages/nosotros.php"; ?>" class="hover:text-green-700">Nosotros</a>
          <a href="<?php echo $inicio ? "./src/pages/anuncios.php" : "../../src/pages/anuncios.php"; ?>" class="hover:text-green-700">Anuncios</a>
          <a href="<?php echo $inicio ? "./src/pages/blog.php" : "../../src/pages/blog.php"; ?>" class="hover:text-green-700">Blog</a>
          <a href="<?php echo $inicio ? "./src/pages/contacto.php" : "../../src/pages/contacto.php"; ?>" class="hover:text-green-700">Contacto</a>
        </nav>
      </div>
      <p class="text-xl text-center">
        Todos los derechos reservados 2024 &copy;
      </p>
</footer>
<script src="<?php echo $inicio ? "./build/index.js" :"../../build/index.js"; ?>"></script>