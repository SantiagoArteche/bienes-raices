<footer class="mt-8 bg-gray-700 p-4 text-white">
      <div>
        <nav class="mb-5 gap-10 flex justify-center">
          <a href="<?php 
              if($inicio){
                echo "./src/pages/nosotros.php";
                }else if ($admin){
                  echo  "../src/pages/nosotros.php";
                }else{
                 echo "../../src/pages/nosotros.php";
                }
              ?>" class="hover:text-green-700">Nosotros</a>
          <a href="<?php 
              if($inicio){
                echo "./src/pages/anuncios.php";
                }else if ($admin){
                  echo  "../src/pages/anuncios.php";
                }else{
                 echo "../../src/pages/anuncios.php";
                }
              ?>" class="hover:text-green-700">Anuncios</a>
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
              ?>" class="hover:text-green-700">Contacto</a>
        </nav>
      </div>
      <p class="text-xl text-center">
        Todos los derechos reservados 2024 &copy;
      </p>
</footer>
<script src="<?php 
              if($inicio){
                echo "./build/index.js";
                }else if ($admin){
                  echo  "../build/index.js";
                }else{
                 echo "../../build/index.js";
                }
              ?>"
></script>