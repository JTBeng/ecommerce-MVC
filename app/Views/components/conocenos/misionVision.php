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