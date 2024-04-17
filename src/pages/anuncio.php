
<?php
   require "../../includes/funciones.php";
   incluirTemplate('header');


   require ".././../includes/config/database.php";

   $db = connectDB();

   $idParam = filter_var($_GET['id'], FILTER_VALIDATE_INT);

   if(!$idParam){
    header('Location: ../../index.php');} 

   

   $query = "SELECT * FROM estates WHERE id=$idParam ;";

   $response = mysqli_query($db, $query);

   if($response -> num_rows === 0){
    header('Location: ../../index.php');} 

?>


  <?php while($row = mysqli_fetch_assoc($response)): ?>
    <main class="flex flex-col items-center justify-center ">
      <h1 class="text-4xl text-center pb-10 pt-8">
        <?php echo $row['title']; ?>
      </h1>

      <div class="max-w-[60rem] min-h-[800px]">
        <picture class="flex justify-center items-center">
          <source srcset="../../img/<?php echo $row['img']; ?>" type="image/jpeg" />
          <source srcset="../../img/<?php echo $row['img']; ?>" type="image/webp" />
          <img
            loading="lazy"
            src="../../img/ <?php echo $row['img']; ?>"
            alt="casa frente al bosque"
            class="w-full h-[31rem]"
          />
        </picture>

        <div class="flex flex-col gap-8">
          <p class="mt-5 text-2xl text-green-600 font-bold">$ <?php echo $row['price']; ?></p>
          <ul class="grid grid-cols-3 px-10 iconos">
            <li class="flex justify-center items-center flex-1">
              <img
                src="../../build/img/icono_wc.svg"
                loading="lazy"
                alt="icono wc"
                class="mr-3"
              />
              <p class="font-bold"> <?php echo $row['wc']; ?></p>
            </li>
            <li class="flex justify-center items-center flex-1">
              <img
                src="../../build/img/icono_estacionamiento.svg"
                loading="lazy"
                alt="icono estacionamiento"
                class="mr-3"
              />
              <p class="font-bold"> <?php echo $row['parking']; ?></p>
            </li>
            <li class="flex justify-center items-center flex-1">
              <img
                src="../../build/img/icono_dormitorio.svg"
                loading="lazy"
                alt="icono dormitorio"
                class="mr-3"
              />
              <p class="font-bold"> <?php echo $row['rooms']; ?></p>
            </li>
          </ul>
        
          <p><?php echo $row['description']; ?></p>
        
          <?php endwhile; ?>
        </div>
      </div>
    </main>
    
    <?php
    incluirTemplate('footer')
    ?>
  
  </body>
</html>
