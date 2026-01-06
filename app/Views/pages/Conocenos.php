<!-- HISTORIA -->
 <?php
// if ($imagenPrincipal != '' || $historiaEmpresa != '') {
//     include '..\components\conocenos\historia.php';
// }
?>
<?php if ($imagenPrincipal != '' || $historiaEmpresa != '') { ?>
    <section>
        <div class="grid grid-cols-1 sm:grid-cols-<?= $columnasHistoria ?> gap-4 px-4">
            <?php if ($imagenPrincipal != '') { ?>
                <div class="@[480px]:px-4 @[480px]:py-3 px-4 pt-2">
                    <div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden rounded-xl min-h-[218px]" data-alt="Image of a modern and bright office space with people collaborating" style='background-image: url("https://wenzhou.erponweb.com.mx/customcode/Img_Ecommerce/Pagina_Conocenos/<?= $imagenPrincipal ?>");'></div>
                </div>
            <?php } ?>
            <?php if ($historiaEmpresa != '') { ?>
                <div class="flex flex-col">
                    <h1 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Nuestra Historia</h2>
                        <p class="text-[#3c4a51] dark:text-slate-300 text-base font-normal leading-relaxed pb-3 pt-1 px-4">
                            <?= htmlspecialchars($historiaEmpresa) ?>
                        </p>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<!-- MISION Y VISION -->
<?php if ($mision != '' || $vision != '') { ?>
    <section>
        <div class="grid grid-cols-1 gap-4 px-4">
            <h1 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                <?= $tituloMision ?> <?= $columnasMisionVision == 2 ? ' y ' : '' ?> <?= $tituloVision ?>
                </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-<?= $columnasMisionVision ?> gap-4 px-4">
            <?php if (!empty($tituloMision)) { ?>
                <div class="flex flex-col lg:bg<?= $config['base_clara'] ?> lg:hover:shadow-xl transition-shadow duration-300 lg:rounded-2xl">
                    <h3 class="font-bold text-[#0d171b] dark:text-slate-100  pb-3 pt-1 px-4"><?= $tituloMision ?></h3>
                    <p class="text-[#3c4a51] dark:text-slate-300 text-base font-normal leading-relaxed pb-3 pt-1 px-4">
                        <?= htmlspecialchars($mision) ?>
                    </p>
                </div>
            <?php } ?>
            <?php if (!empty($tituloVision)) { ?>
                <div class="flex flex-col lg:bg<?= $config['base_clara'] ?> lg:hover:shadow-xl transition-shadow duration-300 lg:rounded-2xl">
                    <h3 class="font-bold text-[#0d171b] dark:text-slate-100  pb-3 pt-1 px-4"><?= $tituloVision ?></h3>
                    <p class="text-[#3c4a51] dark:text-slate-300 text-base font-normal leading-relaxed pb-3 pt-1 px-4">
                        <?= htmlspecialchars($vision) ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<!-- VALORES -->
<?php if ($cantidadValores > 0) { ?>
    <section>
        <div class="grid grid-cols-1 gap-4 px-4">
            <h1 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Nuestros Valores</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-<?= $cantidadValores == 2 || $cantidadValores == 4 ? 2 : 1 ?> gap-4 px-4">
            <?php
            $numValor = 0;
            foreach ($valores as $valor) {
                if ($valor !== '' && $valor !== null) {
            ?>
                    <div class="flex flex-col items-center text-center p-6 bg-white dark:bg-background-dark/50 bg-[#FAFAFA] p-8 rounded-2xl text-center hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center justify-center size-12 bg<?= $config['base_clara'] ?> rounded-full mb-3">
                            <span class="material-symbols-outlined text<?= $config['color_principal'] ?> text-2xl"><?= htmlspecialchars($iconosValores[$numValor]) ?></span>
                        </div>
                        <h3 class="font-bold text-[#0d171b] dark:text-slate-100 mb-1"><?= htmlspecialchars($titulosValores[$numValor]) ?></h3>
                        <p class="text-[#3c4a51] dark:text-slate-300 text-sm leading-relaxed"><?= htmlspecialchars($valor) ?></p>
                    </div>
            <?php
                    $numValor++;
                }
            }
            ?>
        </div>
    </section>
<?php } ?>
<!-- BOTON PRODUCTOS -->
<section class="p-4 pt-8 pb-8">
    <a
        href="/products"
        class="block mx-auto mt-4 py-2
               md:w-[92%] lg:w-[88%]
               rounded-xl
               bg-gradient-to-r from<?= $config['color_principal'] ?>
               to<?= $config['color_secundario'] ?>
               text-white font-semibold text-center
               shadow hover:scale-[1.03]
               transition-transform duration-300">
        Ver Nuestros Productos
    </a>
</section>