<!-- components/product-card.php -->
<section id="product-grid" class="mx-auto grid max-w-[1200px] grid-cols-2 gap-2 px-5 pb-10 lg:grid-cols-4">
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <div class="group relative flex flex-col rounded-2xl bg-white shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <!-- Imagen del producto -->
                <div class="relative w-full aspect-square overflow-hidden">
                    <img
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-110"
                        src="https://wenzhou.erponweb.com.mx/customcode/imagenes/<?= $product['nombre_imagen'] ?>"
                        alt="<?= $product['name'] ?>" />

                    <!-- Letrero descuento -->
                    <?php if ($product['en_oferta']): ?>
                        <div class="absolute top-3 right-3">
                            <span class="bg<?= $config['color_secundario'] ?> text-white text-xs font-bold px-2 py-1 rounded-full shadow">
                                -<?= $product['porcentaje_descuento'] ?>&percnt; OFF
                            </span>
                        </div>
                    <?php endif; ?>

                    <!-- Overlay acciones -->
                    <div class="absolute inset-0 flex items-center justify-center gap-3 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a
                            href="/product/detail/<?= $product['id'] ?>"
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

                <!-- Contenido -->
                <div class="p-4">
                    <h3 class="text-gray-800 font-semibold truncate"><?= $product['name'] ?></h3>

                    <!-- Precios -->
                    <p class="mt-1 text-lg font-bold text<?= $config['color_principal'] ?>">
                        $<?= number_format($product['precio_final'], 2) ?>
                        <?php if ($product['en_oferta']): ?>
                            <span class="ml-2 text-sm text-gray-400 line-through">
                                $<?= number_format($product['price'], 2) ?>
                            </span>
                        <?php endif; ?>
                    </p>
                    <div class="flex items-center mt-2 text-yellow-400">
                        ★★★★☆ <span class="ml-2 text-sm text-gray-400">(38)</span>
                    </div>

                    <button class="mt-4 w-full py-2 rounded-xl bg-gradient-to-r from<?= $config['color_principal'] ?> to<?= $config['color_secundario'] ?> text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
                        Agregar al Carrito
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay productos disponibles.</p>
    <?php endif; ?>
</section>