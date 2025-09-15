  <section
    class="container mx-auto flex-grow max-w-[1200px] border-b py-5 lg:flex lg:flex-row lg:py-10 text-xl lg:text-sm">
    <!-- sidebar  -->
    <section id="sidebar"
      class="fixed top-0 left-0 z-50 h-full w-[300px] bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0 lg:block flex-shrink-0 px-4 text-xl lg:text-sm">
      <div class="flex border-b pb-5">
        <div class="w-full">
          <p class="mb-3 font-medium">CATEGORIAS</p>
          <?php

          foreach ($categorias as $categoria):
            if (trim($categoria['estatus']) === 'Activo') {
              $categoriaNombre = $categoria['name'];
              $cantidadXCategoria = $categoria['total_productos'];
              $categoriaId = $categoria['categoria'];
          ?>
              <div class="flex w-full justify-between">
                <div class="flex justify-center items-center">
                  <input type="checkbox"
                    name="categorias[]"
                    value="<?= $categoriaId ?>"
                    class="filtro-categoria" />
                  <p class="ml-4"><?= $categoriaNombre ?></p>
                </div>
                <div>
                  <p class="text<?= $config['color_secundario'] ?>">(<?= $cantidadXCategoria ?>)</p>
                </div>
              </div>
          <?php
            }
          endforeach; ?>
        </div>
      </div>

      <div class="flex border-b py-5">
        <div class="w-full">
          <p class="mb-3 font-medium">PRECIO</p>

          <div class="flex w-full items-center">
            <div class="flex justify-between">
              <input
                id="precio-min"
                type="number"
                min="0"
                class="h-8 w-[90px] border pl-2"
                placeholder="0" />
              <span class="px-3">-</span>
              <input
                id="precio-max"
                type="number"
                max="999999"
                class="h-8 w-[90px] border pl-2"
                placeholder="99999" />
            </div>
            <!-- Botón aplicar filtro -->
            <button
              id="btn-filtrar-precio"
              class="text-xl lg:text-sm ml-4 h-8 px-3 bg<?= $config['base_clara'] ?> text-white rounded-full flex cursor-pointer flex-col items-center justify-center hover:opacity-60">
              <svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12h15m0 0l-6-6m6 6l-6 6" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="flex border-b py-5">
        <div class="w-full">
          <div class="flex w-full items-center">
            <select id="sort" onchange="filtrado()" class="border px-4 py-3 text-lg w-full rounded-md">
              <option value="">Ordenar por...</option>
              <option value="price_asc">Menor precio</option>
              <option value="price_desc">Mayor precio</option>
              <option value="name_asc">Nombre (A-Z)</option>
              <option value="name_desc">Nombre (Z-A)</option>
            </select>
          </div>
        </div>
      </div>
      <div class="flex border-b py-5">
        <div class="w-full">
          <div class="flex w-full items-center">
            <button class="mt-4 w-full py-2 rounded-xl bg-gradient-to-r from<?= $config['color_principal'] ?>  to<?= $config['color_secundario'] ?> text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
              Limpiar Filtros
            </button>
          </div>
        </div>
      </div>

      <!-- <div class="flex border-b py-5">
        <div class="w-full">
          <p class="mb-3 font-medium">BRANDS</p>

          <div class="flex w-full justify-between">
            <div class="flex justify-center items-center">
              <input type="checkbox" />
              <p class="ml-4">Fornighte</p>
            </div>
            <div>
              <p class="text<?= $config['base_clara'] ?>">(124)</p>
            </div>
          </div>
        </div>
      </div> -->



      <!-- <div class="flex py-5">
        <div class="w-full">
          <p class="mb-3 font-medium">COLOR</p>

          <div class="flex gap-2">
            <div
              class="h-8 w-8 cursor-pointer border border-white bg-gray-600 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500"></div>
            <div
              class="h-8 w-8 cursor-pointer border border-white bg-violet-900 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500"></div>
            <div
              class="h-8 w-8 cursor-pointer border border-white bg-red-900 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500"></div>
          </div>
        </div>
      </div>-->
    </section>
    <div id="overlay"
      class="fixed inset-0 bg-black bg-opacity-50 hidden z-40 lg:hidden"></div>
    <!-- /sidebar  -->

    <div>
      <!-- ORDENAR POR Y ACOMODO PRODUCTOS -->
      <div class="mb-5 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 gap-3">
        <div class="flex gap-3 w-full sm:w-auto">
          <button id="btn-menu" class="lg:hidden p-2 rounded-md border bg-white">
            ☰ Filtrar
          </button>
        </div>
      </div>
      <!-- PRODUCTOS -->
      <section id="product-grid" class="mx-auto grid max-w-[1200px] grid-cols-2 gap-2 px-5 pb-10 lg:grid-cols-4">
        <?php if (!empty($products)):
          foreach ($products as $product):
            $porcentaje = $product['porcentaje_descuento'];
            if (intval($porcentaje) == $porcentaje) {
              $porcentaje = intval($porcentaje);
            } else {
              $porcentaje = $porcentaje;
            }
        ?>
            <div class="group relative flex flex-col rounded-2xl bg-white shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
              <!-- Imagen del producto -->
              <div class="relative w-full aspect-square overflow-hidden">
                <img
                  class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-110"
                  src="https://wenzhou.erponweb.com.mx/customcode/imagenes/<?= $product['nombre_imagen'] ?>"
                  alt="<?= $product['name'] ?>" />

                <!-- LETRERO DE DESCUENTO -->
                <?php if (!empty($product['precio_promo'])) { ?>
                  <div class="absolute top-3 right-3">
                    <span class="bg<?= $config['color_secundario'] ?> text-white text-xs font-bold px-2 py-1 rounded-full shadow">
                      -<?= $porcentaje ?>&percnt; OFF
                    </span>
                  </div>
                <?php } ?>

                <!-- Overlay con acciones -->
                <div class="absolute inset-0 flex items-center justify-center gap-3 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                  <a
                    href="product-overview.html"
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-800 shadow hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke="currentColor"
                      class="h-5 w-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 
            105.196 5.196a7.5 7.5 0 
            0010.607 10.607z" />
                    </svg>
                  </a>
                  <button
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-white text<?= $config['color_principal'] ?> shadow hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="h-5 w-5">
                      <path
                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 
            15.247 0 01-.383-.218 25.18 25.18 0 
            01-4.244-3.17C4.688 15.36 2.25 12.174 
            2.25 8.25 2.25 5.322 4.714 3 7.688 
            3A5.5 5.5 0 0112 5.052 5.5 5.5 0 
            0116.313 3c2.973 0 5.437 2.322 5.437 
            5.25 0 3.925-2.438 7.111-4.739 
            9.256a25.175 25.175 0 01-4.244 
            3.17 15.247 15.247 0 
            01-.383.219l-.022.012-.007.004-.003.001a.752.752 
            0 01-.704 0l-.003-.001z" />
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Contenido del producto -->
              <div class="p-4">
                <!-- Nombre -->
                <h3 class="text-gray-800 font-semibold truncate"><?= $product['name'] ?></h3>

                <!-- Precio -->
                <?php if (!empty($product['precio_promo'])) { ?>
                  <p class="mt-1 text-lg font-bold text<?= $config['color_principal'] ?>">
                    $<?= number_format($product['precio_promo'], 2) ?>
                    <span class="ml-2 text-sm text-gray-400 line-through">
                      $<?= number_format($product['price'], 2) ?>
                    </span>
                  </p>
                <?php } else { ?>
                  <p class="mt-1 text-lg font-bold text<?= $config['color_principal'] ?>">
                    $<?= number_format($product['price'], 2) ?>
                  </p>
                <?php } ?>

                <!-- Estrellas -->
                <div class="flex items-center mt-2 text-yellow-400">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                  </svg>
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                  </svg>
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                  </svg>
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                  </svg>
                  <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                  </svg>
                  <span class="ml-2 text-sm text-gray-400">(38)</span>
                </div>

                <!-- Botón agregar -->
                <button class="mt-4 w-full py-2 rounded-xl bg-gradient-to-r from<?= $config['color_principal'] ?> to<?= $config['color_secundario'] ?> text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
                  Agregar al Carrito
                </button>
              </div>
            </div>

          <?php endforeach;
        //SIN PRODUCTOS
        else: ?>
          <p>No hay productos disponibles.</p>
        <?php endif; ?>
      </section>
      <!-- ICONO RECARGAR -->
      <div id="loading" class="flex justify-center py-6 hidden">
        <div class="h-8 w-8 animate-spin rounded-full border-4 border-blue-500 border-t-transparent"></div>
      </div>
    </div>
  </section>