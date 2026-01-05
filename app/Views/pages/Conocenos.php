<!-- Hero Image -->
<?php
$cantidadValores = 0;

$campos = [
    $conocenos['valor_ecommerce1'],
    $conocenos['valor_ecommerce2'],
    $conocenos['valor_ecommerce3'],
    $conocenos['valor_ecommerce4'],
];

foreach ($campos as $valor) {
    if ($valor !== '' && $valor !== null) {
        $cantidadValores++;
    }
}

?>
<div class="@container">
    <div class="@[480px]:px-4 @[480px]:py-3 px-4 pt-2">
        <div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden rounded-xl min-h-[218px]" data-alt="Image of a modern and bright office space with people collaborating" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCod0gZXRamUwbZrBfDh0Ov1sNXJQG1Cgi6VabOBqx_BjWiyLB2lHXX-EJsUkLyc40AZHFPeILwiMzEs0RV1kM00yZ78a5Vk50aRi0zNteSHxtVW7vDg0Uc9cNTr6djUBsX5cvHDg5LapQlpQZrKA3VRgfRuyW3JawvRHcFL2YowGqbgNQ0LRErxLD31KWYGJIjG7PnUXCkn0x-DPeLsIN43P5vyVJ4JU18fK4yplzCrX1xjc42I_mNWDxQxhXtWKMR6ZQOYVJnmmhy");'></div>
    </div>
</div>
<!-- Our Story Section -->
<section>
    <h2 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Nuestra Historia</h2>
    <p class="text-[#3c4a51] dark:text-slate-300 text-base font-normal leading-relaxed pb-3 pt-1 px-4">
        <?= htmlspecialchars(strtoupper($conocenos['historia_empresa'])) ?>
    </p>
</section>
<!-- Mission & Vision Section -->
<section>
    <h2 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Misión y Visión</h2>
    <div class="px-4 space-y-4">
        <div>
            <h3 class="font-bold text-[#0d171b] dark:text-slate-100">Misión</h3>
            <p class="text-[#3c4a51] dark:text-slate-300 text-base font-normal leading-relaxed pt-1">
                <?= htmlspecialchars(($conocenos['mision_empresa'])) ?>
            </p>
        </div>
        <div>
            <h3 class="font-bold text-[#0d171b] dark:text-slate-100">Visión</h3>
            <p class="text-[#3c4a51] dark:text-slate-300 text-base font-normal leading-relaxed pt-1">
                <?= htmlspecialchars(($conocenos['vision_empresa'])) ?>
            </p>
        </div>
    </div>
</section>
<!-- Our Values Section -->
<?php if ($cantidadValores > 0) { ?>
    <section>
        <h2 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Nuestros Valores</h2>
        <div class="grid grid-cols-1 sm:grid-cols-<?= $cantidadValores == 2 || $cantidadValores == 4 ? 2 : 1 ?> gap-4 px-4">
            <div class="flex flex-col items-center text-center p-6 bg-white dark:bg-background-dark/50 rounded-lg">
                <div class="flex items-center justify-center size-12 bg-primary/20 rounded-full mb-3">
                    <span class="material-symbols-outlined text-primary text-2xl"><?= htmlspecialchars(($conocenos['icono_valor_empresa1'])) ?></span>
                </div>
                <h3 class="font-bold text-[#0d171b] dark:text-slate-100 mb-1"><?= htmlspecialchars(($conocenos['titulo_valor_ecommerce1_c'])) ?></h3>
                <p class="text-[#3c4a51] dark:text-slate-300 text-sm leading-relaxed"><?= htmlspecialchars(($conocenos['valor_ecommerce1'])) ?></p>
            </div>
            <div class="flex flex-col items-center text-center p-6 bg-white dark:bg-background-dark/50 rounded-lg">
                <div class="flex items-center justify-center size-12 bg-primary/20 rounded-full mb-3">
                    <span class="material-symbols-outlined text-primary text-2xl"><?= htmlspecialchars(($conocenos['icono_valor_empresa2'])) ?></span>
                </div>
                <h3 class="font-bold text-[#0d171b] dark:text-slate-100 mb-1"><?= htmlspecialchars(($conocenos['titulo_valor_ecommerce2_c'])) ?></h3>
                <p class="text-[#3c4a51] dark:text-slate-300 text-sm leading-relaxed"><?= htmlspecialchars(($conocenos['valor_ecommerce2'])) ?></p>
            </div>
            <div class="flex flex-col items-center text-center p-6 bg-white dark:bg-background-dark/50 rounded-lg">
                <div class="flex items-center justify-center size-12 bg-primary/20 rounded-full mb-3">
                    <span class="material-symbols-outlined text-primary text-2xl"><?= htmlspecialchars(($conocenos['icono_valor_empresa3'])) ?></span>
                </div>
                <h3 class="font-bold text-[#0d171b] dark:text-slate-100 mb-1"><?= htmlspecialchars(($conocenos['titulo_valor_ecommerce3_c'])) ?></h3>
                <p class="text-[#3c4a51] dark:text-slate-300 text-sm leading-relaxed"><?= htmlspecialchars(($conocenos['valor_ecommerce3'])) ?></p>
            </div>
            <div class="flex flex-col items-center text-center p-6 bg-white dark:bg-background-dark/50 rounded-lg">
                <div class="flex items-center justify-center size-12 bg-primary/20 rounded-full mb-3">
                    <span class="material-symbols-outlined text-primary text-2xl"><?= htmlspecialchars(($conocenos['icono_valor_empresa4'])) ?></span>
                </div>
                <h3 class="font-bold text-[#0d171b] dark:text-slate-100 mb-1"><?= htmlspecialchars(($conocenos['titulo_valor_ecommerce4_c'])) ?></h3>
                <p class="text-[#3c4a51] dark:text-slate-300 text-sm leading-relaxed"><?= htmlspecialchars(($conocenos['valor_ecommerce4'])) ?></p>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Our Team Section -->
<section>
    <h2 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Nuestro Equipo</h2>
    <div class="relative w-full">
        <div class="flex snap-x snap-mandatory overflow-x-auto gap-4 px-4 pb-4">
            <div class="snap-center shrink-0 w-[80%] sm:w-[60%] md:w-[45%]">
                <img class="w-full h-48 object-cover rounded-lg" data-alt="Team members collaborating around a computer screen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA34Z_YlLB2EzrHZrgoEEZT1ZOIrQXFa66qOrsZbJQFcKW1QU7-_5U60vmcqoWTjkY0dORMZdUz0uRnV7JkQdOISJkLiCjRIiaonNu6hRtXYiEtHmosZ4hj_RJsyphogDvIIQ8jZRPieptuT4iGkKmW2ror7gwTE5yzKErTIrckHSnvJJq4W2X97kpfx7XUw5orFCHlzcgguXh1r2C5yFEVxWwSAUzb44o95b5vDdCVZL5kJAcm4Jait6nR5OPPsek-RbJm_kPe847e" />
            </div>
            <div class="snap-center shrink-0 w-[80%] sm:w-[60%] md:w-[45%]">
                <img class="w-full h-48 object-cover rounded-lg" data-alt="A group of colleagues laughing together in a casual meeting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFYnJJGWFmtROGKgskWPzOCcUb-YAflMQSuh8HLDE_LrabeZKwin3SkCDMC82LdfQ7uAUiJ755ugmSHNH-S7VUoIRbySeWZCL5KVaXuKbreIToSo5_qTQewfAFtatB3fwBUKZzX7A-IipJsGtgpQewY-cOLDCgsXAOzp4qKfUQC8C2l02BKg_uFg6DULBPclULx5Gb_V2lyoaBxkZfwrU7JqZsBK8DZSTehKqc7aLXrBwe7zJEIzW20K_vxMIaag5D1brULPfZ6jf6" />
            </div>
            <div class="snap-center shrink-0 w-[80%] sm:w-[60%] md:w-[45%]">
                <img class="w-full h-48 object-cover rounded-lg" data-alt="Two professionals reviewing a document on a tablet" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDA25lSGGIYjOa0jb2VAp4zHEGgJeck7kzLxu0HEIGJbbjPXfKy4IH0IGVPeqentGYxQEoFZmH8-n6WtRtFB8DTlYVktcGGhGILalTZyI5F5ngxs9fRgXyiAPzH3z3uT0iFPCG86hKqlYU2Qv-7t3cn3e-mvLp0hrOakn8OciafBOEeZ4EcA-1dJQCfb6ppx92WIbIEhDK5ogxdC056CwTEQmCNVxVQQ8fbRAhNbLtvLJkxYfT9ZTusRXWMw7-wvm0oN6ogPgMQSLny" />
            </div>
            <div class="snap-center shrink-0 w-[80%] sm:w-[60%] md:w-[45%]">
                <img class="w-full h-48 object-cover rounded-lg" data-alt="Diverse team members in a creative brainstorming session" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWkuM5Q9ub8xFPyyZHwnKXr7vJmmu4RFYopP-MTID4TNN43iN--kEkr7Xaa6hV2ajQ1Ra3qvGYh11bSWyCe2MyY_6GFnTF0MxZ3bjFO7WCopBa7K_rQbrZfMVXvBDkoNtwiP9TeHt9iiTtN152YjYgk9tu2tHzQTBjB7BgFGdDBClEm_1n9EJ1pptBdqSdOavIsEBq6byFZjkphB6QyLlzL0cwf5JipDO-B4-hw8vLDz0vG7BjpnJQX8ZofzXVoPFUc3Ado5nQSiqg" />
            </div>
        </div>
    </div>
</section>
<!-- CTA Section -->
<section class="p-4 pt-8 pb-8">
    <button class="w-full bg-primary text-white font-bold py-4 px-6 rounded-lg shadow-lg hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2 dark:focus:ring-offset-background-dark transition-colors duration-300">
        Ver Nuestros Productos
    </button>
</section>