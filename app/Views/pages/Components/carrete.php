<?php

function carrete($id, $items, $config)
{
    $renderFunction = "render_carrete_" . $id;
?>
    <div class="relative w-full  bg-gradient-to-b from-white via-gray-50 to-gray-100 overflow-hidden">
        <!-- Botón Izquierdo (solo visible en escritorio) -->
        <button
            id="btn-left-<?= htmlspecialchars($id) ?>"
            class="hidden lg:flex absolute left-0 top-0 h-full w-16 z-10 items-center justify-center 
            bg-gradient-to-r from<?= $config['base_clara'] ?> to-transparent 
            hover:from<?= $config['color_secundario'] ?> transition-all duration-300 
            text-white text-3xl font-bold shadow-inner backdrop-blur-[2px]"
            aria-label="Scroll Izquierda">
            &#10094;
        </button>

        <!-- Contenedor del Carrete -->
        <div
            id="carrete-<?= htmlspecialchars($id) ?>"
            class="flex overflow-x-auto snap-x snap-mandatory no-scrollbar w-full gap-4">

            <?php foreach ($items as $item): ?>
                <?php
                if (function_exists($renderFunction)) {
                    echo $renderFunction($item, $config);
                }
                ?>
            <?php endforeach; ?>
        </div>

        <!-- Botón Derecho (solo visible en escritorio) -->
        <button
            id="btn-right-<?= htmlspecialchars($id) ?>"
            class="hidden lg:flex absolute right-0 top-0 h-full w-16 z-10 items-center justify-center 
            bg-gradient-to-l from<?= $config['base_clara'] ?> to-transparent 
            hover:from<?= $config['color_secundario'] ?> transition-all duration-300 
            text-white text-3xl font-bold shadow-inner backdrop-blur-[2px]"
            aria-label="Scroll Derecha">
            &#10095;
        </button>
    </div>

    <script>
        (function() {
            const container = document.getElementById("carrete-<?= $id ?>");
            const btnLeft = document.getElementById("btn-left-<?= $id ?>");
            const btnRight = document.getElementById("btn-right-<?= $id ?>");

            const scrollAmount = container.offsetWidth;

            if (btnLeft && btnRight) {
                btnLeft.addEventListener("click", () => {
                    container.scrollBy({
                        left: -scrollAmount,
                        behavior: "smooth"
                    });
                });

                btnRight.addEventListener("click", () => {
                    container.scrollBy({
                        left: scrollAmount,
                        behavior: "smooth"
                    });
                });
            }
        })();
    </script>
<?php
}


function render_carrete_principal($item, $config)
{
    $imgUrl = 'https://wenzhou.erponweb.com.mx/customcode/Img_Ecommerce/Carrete_Principal/' . htmlspecialchars($item['img']);
    $url = htmlspecialchars($item['url']);
    $name = htmlspecialchars($item['name']);
    $description = htmlspecialchars($item['description']);
    $color = isset($config['color_principal']);

    return '
    <!-- Versión para pantallas grandes -->
    <div class="hidden lg:block flex-shrink-0 w-full lg:h-[500px] snap-center">
        <a href="' . $url . '" class="block w-full h-full relative overflow-hidden group">
            <img src="' . $imgUrl . '" alt="' . $name . '" class="w-full h-full object-cover brightness-50 transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end p-20">
                <span class="text-white text-4xl font-semibold tracking-wide group-hover:text-' . $color . ' transition-colors duration-300">' . $name . '</span>
                <p class="text-white text-xl mt-4 whitespace-pre-line">' . $description . '</p>
            </div>
        </a>
    </div>

    <!-- Versión para pantallas chicas -->
    <div class="flex items-center justify-center lg:hidden flex-shrink-0 w-full snap-center">
        <div class="relative group flex flex-col gap-4 mx-auto rounded-4xl shadow-sm min-w-full">
            <a class="bg-cover bg-center flex flex-col justify-end overflow-hidden rounded-xl min-h-80 shadow-lg" href="' . $url . '" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 35%), url(\'' . $imgUrl . '\');">
                <div class="p-6 text-white">
                    <h2 class="text-3xl font-bold">
                    ' . $name . '
                    </h2>
                    <p class="text-lg mt-1">
                    ' . $description . '
                    </p>
                </div>
            </a>

        </div>
    </div>
    
';
}

?>
<!-- 
        <div class="flex items-center justify-center lg:hidden flex-shrink-0 w-full snap-center " style="vertical-align: center;">
            <div class="flex flex-col gap-4 mx-auto rounded-4xl shadow-sm min-w-full">
                <a href="' . $url . '"
                    class=" w-[800px] h-[400px] bg-no-repeat aspect-[4/3] sm:aspect-video bg-cover rounded-xl flex flex-col items-start justify-end p-6"
                    style="background-image: url(\'' . $imgUrl . '\');">

                    <div class="bg-black/30 p-4 rounded-lg w-[700px] h-[380px]">
                        <p class="text-white text-2xl font-bold leading-tight">' . $name . '</p>
                        <p class="text-slate-200 text-sm font-normal leading-normal mt-1">' . $description . '</p>
                    </div>
                </a>
            </div>
        </div> -->