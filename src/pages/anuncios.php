
<?php
  require "../../includes/funciones.php";
  incluirTemplate('header');

?>
    <section class="casasYDepas">
      <h2 class="text-4xl text-center py-10">Casas y Departamentos en Venta</h2>

      <?php
  incluirTemplate('anuncios', false, false, 6);
    ?>
    </section>

    <?php
    incluirTemplate('footer')
    ?>
  
  </body>
</html>
