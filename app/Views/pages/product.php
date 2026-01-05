<section class="container flex-grow mx-auto max-w-[1200px] border-b py-5 lg:grid lg:grid-cols-2 lg:py-10">
    <!-- GALERIA IMAGENES DE PRODUCTOS -->
    <div class="container mx-auto px-4 relative">
        <img class="w-full" src="https://wenzhou.erponweb.com.mx/customcode/imagenes/<?= $product['nombre_imagen'] ?>" alt="<?= $product['name'] ?>" />
        <!-- DESCUENTO -->
        <?php if ($product['en_oferta']): ?>
            <div class="absolute top-3 right-3">
                <span class="bg<?= $config['color_secundario'] ?> text-white font-bold px-2 py-1 rounded-full shadow">
                    -<?= $product['porcentaje_descuento'] ?>&percnt; OFF
                </span>
            </div>
        <?php endif; ?>
    </div>
    <!-- /GALERIA IMAGENES DE PRODUCTOS  -->

    <!-- description  -->
    <div class="mx-auto px-5 lg:px-5">
        <h2 class="pt-3 text-2xl font-bold lg:pt-0"><?= $product['name'] ?></h2>
        <!-- PRECIO -->
        <p class="mt-1 text-lg font-bold text<?= $config['color_principal'] ?>">
            $<?= number_format($product['precio_final'], 2) ?>
            <?php if ($product['en_oferta']): ?>
                <span class="ml-2 text-sm text-gray-400 line-through">
                    $<?= number_format($product['price'], 2) ?>
                </span>
            <?php endif; ?>
        </p>
        <!-- ESTRELLAS -->
        <div class="mt-1">
            <div class="flex items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-4 w-4 text-yellow-400">
                    <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd" />
                </svg>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-4 w-4 text-yellow-400">
                    <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd" />
                </svg>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-4 w-4 text-yellow-400">
                    <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd" />
                </svg>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-4 w-4 text-yellow-400">
                    <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd" />
                </svg>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-4 w-4 text-gray-200">
                    <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd" />
                </svg>

                <p class="ml-3 text-sm text-gray-400">(150 reviews)</p>
            </div>
        </div>
        <!-- TRAER INVENTARIO -->
        <p class="mt-5 font-bold">
            EXISTENCIAS: <span class="text-green-600">Stock</span>
        </p>
        <!-- CARACTERISTICAS -->
        <p class="font-bold">MARCA: <span class="font-normal"><?= $product['marca'] ?></span></p>
        <p class="font-bold">CATEGORIA: <span class="font-normal"><?= $product['categoria'] ?></span></p>
        <p class="font-bold">SUB-CATEGORIA: <span class="font-normal"><?= $product['subcategoria'] ?></span></p>
        <p class="text-slate-600 dark:text-slate-400 text-base font-normal leading-normal">
            <?= $product['descripcion'] ?>
        </p>
        <!-- CANTIDAD PRODUCTOS -->
        <div class="mt-7 flex items-center justify-between bg<?= $config['base_clara'] ?> rounded-xl p-2 w-full sm:w-auto">
            <button id="cantidad_menos" type="button" class="cantidad_menos modificar_cantidad flex h-10 w-10 items-center justify-center rounded-l-lg text-slate-600  hover:bg<?= $config['color_secundario'] ?> transition-colors">
                <span class="cantidad_menos material-symbols-outlined text-2xl">remove</span>
            </button>
            <input
                type="text"
                id="cantidad_input"
                name="cantidad_input"
                class="
                        px-4 text-lg font-bold 
                        bg-transparent 
                        border-none outline-none 
                        text-center 
                        text-slate-900 
                        
                        text-slate-600 
                        "
                value="1"
                readonly>
            <button id="color_secundario" type="button" class="cantidad_mas modificar_cantidad flex h-10 w-10 items-center justify-center rounded-r-lg text-slate-600 hover:bg<?= $config['color_secundario'] ?> transition-colors">
                <span class="cantidad_mas material-symbols-outlined text-2xl">add</span>
            </button>
        </div>

        <!-- AGG  CARRITO Y DESEOS -->
        <div class="mt-7 flex flex-row justify-center items-center gap-6">
            <button class=" w-full py-2 rounded-xl bg-gradient-to-r from<?= $config['color_principal'] ?> to<?= $config['color_secundario'] ?> text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
                Agregar al Carrito
            </button>
            <button
                class="flex h-10 w-20 items-center justify-center rounded-full bg-white text<?= $config['color_principal'] ?> shadow hover:scale-110 transition-transform duration-300">
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
</section>

<!-- DETALLES DEL PRODUCTO -->
<section class="container mx-auto max-w-[1200px] px-5 py-5 lg:py-10">
    <?php if (!empty($product['descripcion_completa'])) { ?>
        <h2 class="text-xl">Detalles</h2>
        <p class="mt-4 lg:w-3/4">
            <?= $product['descripcion_completa'] ?>
        </p>
    <?php
    }
    ?>
    <!-- TABLA CARACTERISTICAS -->
    <?php if (!empty($product['peso_unidad'])) { ?>
        <table class="mt-7 w-full table-auto divide-x divide-y lg:w-1/2">
            <tbody class="divide-x border">
                <tr>
                    <td class="border pl-4 font-bold">Peso por unidad</td>
                    <td class="border pl-4"><?= $product['peso_unidad'] ?></td>
                </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
</section>
<!-- DETALLES DEL PRODUCTO -->

<!-- /description  -->

<!-- RECOMENDACIONES -->
<?php if (!empty($products)) { ?>
    <p class="mx-auto mt-10 mb-5 max-w-[1200px] px-5">Productos Relacionados</p>
    <?php include 'components/catalog_product_card.php'; ?>
<?php
}
?>
