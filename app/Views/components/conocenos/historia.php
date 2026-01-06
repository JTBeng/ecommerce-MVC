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