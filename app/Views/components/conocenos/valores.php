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