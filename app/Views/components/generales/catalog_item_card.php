<section>
    <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8 flex flex-col gap-4">
        <?php
        if (!empty($products)):
        ?>
            <div class="grid  <?= $gridClasses ?> gap-4">
                <?php
                foreach ($products as $product):
                ?>

                    <div class="flex items-stretch gap-4 rounded-xl bg-white p-4 shadow-sm">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 flex-shrink-0 bg-center bg-no-repeat bg-cover rounded-lg"
                            style='background-image: url("https://wenzhou.erponweb.com.mx/customcode/imagenes/<?= $product['nombre_imagen'] ?>")'>
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div class="flex justify-between items-start">
                                <a
                                    href="/product/detail/<?= $product['id'] ?>"
                                    class="text-base font-bold leading-tight text<?= $config['color_principal'] ?>">
                                    <?= $product['name'] ?>
                                </a>

                                <span class="material-symbols-outlined text-lg text<?= $config['color_secundario'] ?>">delete</span>
                            </div>

                            <div class="flex justify-between items-start">
                                <p class="text-sm font-normal leading-normal text<?= $config['color_secundario'] ?>">
                                    $<?= number_format($product['precio_final'], 2) ?>

                                    <?php if ($product['en_oferta']): ?>
                                        <span class="ml-2 text-sm text-gray-400 line-through">
                                            $<?= number_format($product['price'], 2) ?>
                                        </span>
                                    <?php endif; ?>
                                </p>
                                <!-- CANTIDAD -->
                                <?php if (!empty($carritoList)): ?>
                                    <div class="mt-2 mb-2 flex items-center justify-between bg<?= $config['base_clara'] ?> rounded-xl flex items-center gap-2 ">
                                        <button id="cantidad_menos_<?= $cant ?>" type="button" class="cantidad_menos modificar_cantidad flex h-10 w-10  items-center justify-center rounded-l-lg text-slate-600 transition-colors hover:bg<?= $config['color_secundario'] ?> ">
                                            <span class="cantidad_menos material-symbols-outlined text-2xl">remove</span>
                                        </button>
                                        <input
                                            type="text"
                                            id="cantidad_input_<?= $cant ?>"
                                            name="cantidad_input"
                                            class="
                                        h-1 w-16 text-lg font-bold 
                                        bg-transparent 
                                        border-none outline-none 
                                        text-center 
                                        text-slate-900 
                                        text-slate-600 "
                                            value="1"
                                            readonly>
                                        <button id="color_secundario_<?= $cant ?>" type="button" class="cantidad_mas modificar_cantidad flex h-10 w-10 items-center justify-center rounded-r-lg text-slate-600 transition-colors hover:bg<?= $config['color_secundario'] ?> ">
                                            <span class="cantidad_mas material-symbols-outlined text-2xl">add</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- CARRITO -->
                            <?php if (!empty($wishList)): ?>
                                <div class="flex items-center gap-2">
                                    <button class="text-sm w-full py-2.5 rounded-xl bg-gradient-to-r from<?= $config['color_principal'] ?> to<?= $config['color_secundario'] ?> text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
                                        Agregar al Carrito
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php
                    $cant++;
                endforeach; ?>
            </div>
        <?php else: ?>
            <p class="px-4"><?= $mensajeSinProductos ?></p>
            <!-- BOTON PRODUCTOS -->
            <?php include __DIR__ . '/../../components/generales/botonProductos.php'; ?>
        <?php endif; ?>
    </div>
</section>