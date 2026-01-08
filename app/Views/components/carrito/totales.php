<?php
if ($cant != 0):
?>
    <div class="fixed bottom-0 left-0 right-0 md:static z-10 bg-background-light/80 p-4 backdrop-blur-sm ">
        <div class="flex mb-2 flex-col gap-2 rounded-xl bg-white p-4 shadow-sm">
            <div class="flex justify-between gap-x-6">
                <p class="text-base font-normal leading-normal text-zinc-500 ">Subtotal</p>
                <p class="text-right text-base font-medium leading-normal text-zinc-900 ">$<?= $total ?></p>
            </div>
            <div class="flex justify-between gap-x-6">
                <p class="text-base font-normal leading-normal text-zinc-500 ">Envío</p>
                <p class="text-right text-base font-medium leading-normal text-zinc-900 ">$<?= $costoEnvio ?></p>
            </div>
            <div class="my-2 h-px w-full bg-zinc-200"></div>
            <div class="flex justify-between gap-x-6">
                <p class="text-lg font-bold leading-normal text-zinc-900 ">Total</p>
                <p class="text-right text-lg font-bold leading-normal text-zinc-900 ">$<?= $totalGeneral ?></p>
            </div>
        </div>
        <button class="cursor-pointer block mx-auto mt-4 py-2
               md:w-[92%] lg:w-[88%]
               rounded-xl
               bg-gradient-to-r from<?= $config['color_principal'] ?>
               to<?= $config['color_secundario'] ?>
               text-white font-semibold text-center
               shadow hover:scale-[1.03]
               transition-transform duration-300">
            Proceder al Pago
        </button>
    </div>
<?php endif; ?>