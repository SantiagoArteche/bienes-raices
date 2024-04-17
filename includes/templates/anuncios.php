<?php

    require __DIR__ . "../../config/database.php";

    $db = connectDB();

    $query = "SELECT * FROM estates LIMIT $limit;";

    $response = mysqli_query($db, $query);

   
?>



<div class="flex justify-center px-10">
        <div class="grid grid-cols-3 w-[1200px] gap-10">
            <?php while($row = mysqli_fetch_assoc($response)):  ?>
                
        <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset=<?php
              if($inicio){
                echo "./img/" . $row['img'];
              }else{
                echo "../../img/" . $row['img'];
              }
              ?>  type="image/jpeg" />
              <source srcset="./build/img/anuncio1.webp" type="image/webp" />
              <img
                loading="lazy"
                src=<?php
              if($inicio){
                echo "./img/" . $row['img'];
              }else{
                echo "../../img/" . $row['img'];
              }
              ?> 
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
              <?php echo $row['title']; ?>
              </h3>
              <p class="mt-2">
              <?php echo $row['description']; ?>
              </p>
              <p class="text-green-600 text-2xl mb-5">$ <?php echo $row['price']; ?></p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src=<?php
              if($inicio){
                echo "./build/img/icono_wc.svg";
              }else{
                echo "../../build/img/icono_wc.svg";
              }
              ?> 
                    
                    
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold"><?php echo $row['wc']; ?></p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src=<?php
              if($inicio){
                echo "./build/img/icono_estacionamiento.svg";
              }else{
                echo "../../build/img/icono_estacionamiento.svg";
              }
              ?> 
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold"><?php echo $row['parking']; ?></p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src=<?php
              if($inicio){
                echo "./build/img/icono_dormitorio.svg";
              }else{
                echo "../../build/img/icono_dormitorio.svg";
              }
              ?> 
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold"><?php echo $row['rooms']; ?></p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href=<?php
              if($inicio){
                echo "./src/pages/anuncio.php?id=" . $row['id'];
              }else{
                echo "../../src/pages/anuncio.php?id=". $row['id'];
              }
              ?> >
                Ver Propiedad
              </a>
            </div>
          </div>

            <?php endwhile; ?>
         
         
        </div>
      </div>