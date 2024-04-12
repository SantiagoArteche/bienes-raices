
<?php
   require "../../includes/funciones.php";
   incluirTemplate('header');
?>

    <main class="flex flex-col items-center justify-center">
      <div class="max-w-[60rem]">
        <h1 class="text-4xl text-center my-5">Contacto</h1>

        <picture>
          <source srcset="../../build/img/destacada3.jpg" type="image/jpeg" />
          <source srcset="../../build/img/destacada3.jpg" type="image/webp" />
          <img src="../../build/img/destacada3.jpg" alt="Imagen Contacto" />
        </picture>

        <h2 class="text-2xl my-5">Llene el formulario de contacto</h2>

        <form id="contactForm">
          <fieldset class="border-[2px] border-gray-700 p-5 flex flex-col">
            <legend class="text-lg">Información Personal</legend>

            <label for="nombre" class="mb-2">Nombre</label>
            <input
              type="text"
              name="nombre"
              class="block rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              placeholder="Tu Nombre"
            />
            <label for="email" class="my-2">Email</label>
            <input
              class="block rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              type="email"
              name="email"
              placeholder="Tu Email"
            />
            <label for="telefono" class="my-2">Teléfono</label>
            <input
              class="blockrounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              type="tel"
              name="telefono"
              placeholder="Tu Teléfono"
            />
            <label for="mensaje" class="my-2">Mensaje</label>
            <textarea
              name="mensaje"
              placeholder="Inserte Mensaje..."
              class="block rounded-md h-48 border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            ></textarea>
          </fieldset>

          <fieldset
            class="border-[2px] border-gray-700 p-5 flex flex-col gap-3"
          >
            <legend class="text-lg">Información sobre la propiedad</legend>
            <div>
              <label for="mensaje">Vende o Compra?</label>
              <select
                name="options"
                id="options"
                class="h-full rounded-md border-2 border-black bg-transparent py-0 pl-2 pr-7 text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
              >
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
              </select>
            </div>

            <label for="presupuesto" class="mt-2">Precio O Presupuesto</label>
            <input
              class="blockrounded-md w-full border-0 py-1.5 pl-7 pr-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              type="number"
              name="presupuesto"
              placeholder="Tu Precio o Presupuesto"
            />
          </fieldset>

          <fieldset
            class="border-[2px] border-gray-700 p-5 flex flex-col gap-3"
          >
            <legend class="text-lg">Contacto</legend>

            <div class="flex gap-5">
              <p>Como desea ser contactado:</p>

              <div>
                <label for="emailRadio">Email</label>
                <input
                  type="radio"
                  name="contacto"
                  value="emailRadio"
                  class="mr-3"
                />

                <label for="telRadio">Teléfono</label>
                <input type="radio" name="contacto" value="telRadio" />
              </div>
            </div>

            <div class="flex items-center gap-5">
              <p>Si eligió teléfono, elija la fecha y la hora:</p>

              <div class="flex gap-3 items-center my-3">
                <label for="fecha">Fecha</label>
                <input
                  class="block rounded-md border-0 py-1.5 px-5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  type="date"
                  name="fecha"
                />
              </div>
              <div class="flex gap-3 items-center my-3">
                <label for="hora">Hora</label>
                <input
                  class="blockrounded-md border-0 w-fit py-1.5 px-5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  type="time"
                  name="hora"
                  min="09:00"
                  max="18:00"
                />
              </div>
            </div>
          </fieldset>

          <button
            type="submit"
            value="Enviar"
            class="mt-3 bg-green-700 font-bold text-white py-2 px-5"
          >
            Enviar
          </button>
        </form>
      </div>
    </main>

    <?php
    incluirTemplate('footer');
    ?>
   
  </body>
</html>
