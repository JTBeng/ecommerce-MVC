<!-- sidebar  -->
<section id="sidebar"
    class="fixed top-0 left-0 z-50 max-w-6xl h-full  bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out lg:sticky lg:top-20 lg:translate-x-0 lg:block flex-shrink-0 px-4 text-xl lg:text-sm">
    
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
                <button id="btn-limpiar-filtros" class="mt-4 w-full py-2 rounded-xl bg-gradient-to-r from<?= $config['color_principal'] ?>  to<?= $config['color_secundario'] ?> text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
                    Limpiar Filtros
                </button>
            </div>
        </div>
    </div>

</section>
<!-- FILTRADO MOVIL -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40 lg:hidden"></div>
<div class="mb-5 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 gap-3">
    <div class="flex gap-3 w-full sm:w-auto">
        <button id="btn-menu" class="lg:hidden p-2 rounded-md border bg-white">
            ☰ Filtrar
        </button>
    </div>
</div>
<!-- <div> -->