
<?php
  require "../../includes/funciones.php";
  incluirTemplate('header');

?>
    <section class="casasYDepas">
      <h2 class="text-4xl text-center py-10">Casas y Departamentos en Venta</h2>

      <div class="flex justify-center px-10">
        <div class="grid grid-cols-3 w-[1200px] gap-10">
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="../../build/img/anuncio1.jpg" type="image/jpeg" />
              <source
                srcset="../../build/img/anuncio1.webp"
                type="image/webp"
              />
              <img
                loading="lazy"
                src="../.../../build/img/anuncio1.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa de Lujo en el Lago
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="../../build/img/anuncio2.jpg" type="image/jpeg" />
              <source
                srcset="../../build/img/anuncio2.webp"
                type="image/webp"
              />
              <img
                loading="lazy"
                src="../../build/img/anuncio2.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa Terminados de Lujo
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="../../build/img/anuncio3.jpg" type="image/jpeg" />
              <source
                srcset="../../build/img/anuncio3.webp"
                type="image/webp"
              />
              <img
                loading="lazy"
                src="../.../../build/img/anuncio3.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa con Alberca
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="../../build/img/anuncio4.jpg" type="image/jpeg" />
              <source
                srcset="../../build/img/anuncio4.webp"
                type="image/webp"
              />
              <img
                loading="lazy"
                src="../../build/img/anuncio4.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa de Lujo en el Lago
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="../../build/img/anuncio5.jpg" type="image/jpeg" />
              <source
                srcset="../../build/img/anuncio5.webp"
                type="image/webp"
              />
              <img
                loading="lazy"
                src="../../build/img/anuncio5.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa de Lujo en el Lago
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
          <div
            class="bg-gray-300 border-gray-500 border-solid border-[2px] pb-5 items-center flex flex-col"
          >
            <picture class="w-full">
              <source srcset="../../build/img/anuncio6.jpg" type="image/jpeg" />
              <source
                srcset="../../build/img/anuncio6.webp"
                type="image/webp"
              />
              <img
                loading="lazy"
                src="../../build/img/anuncio6.jpg"
                class="w-full h-60"
                alt="anuncio1"
              />
            </picture>
            <div class="flex flex-col gap-3 px-5">
              <h3 class="text-center text-2xl font-bold mt-5">
                Casa de Lujo en el Lago
              </h3>
              <p class="mt-2">
                Casa en el lago con excelente vista, acabados de lujo a un
                excelente precio
              </p>
              <p class="text-green-600 text-2xl mb-5">$3,000,000</p>

              <ul class="grid grid-cols-3 px-10">
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_wc.svg"
                    loading="lazy"
                    alt="icono wc"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_estacionamiento.svg"
                    loading="lazy"
                    alt="icono estacionamiento"
                    class="mr-3"
                  />
                  <p class="font-bold">3</p>
                </li>
                <li class="flex justify-center items-center flex-1">
                  <img
                    src="../../build/img/icono_dormitorio.svg"
                    loading="lazy"
                    alt="icono dormitorio"
                    class="mr-3"
                  />
                  <p class="font-bold">4</p>
                </li>
              </ul>
              <a
                class="bg-orange-500 text-white p-4 text-md font-bold mt-5 text-center"
                href="./anuncio.php"
              >
                Ver Propiedad
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    incluirTemplate('footer')
    ?>
  
  </body>
</html>
