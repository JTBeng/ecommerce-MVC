<div class="flex flex-col gap-4 p-5">
    <?php include 'components/catalog_item_card.php'; ?>
</div>
<div class="fixed bottom-0 left-0 right-0 md:static z-10 bg-background-light/80 p-4 backdrop-blur-sm ">
    <!-- Totals -->
    <div class="flex mb-2 flex-col gap-2 rounded-xl bg-white p-4 shadow-sm">
        <div class="flex justify-between gap-x-6">
            <p class="text-base font-normal leading-normal text-zinc-500 ">Subtotal</p>
            <p class="text-right text-base font-medium leading-normal text-zinc-900 ">$160.49</p>
        </div>
        <div class="flex justify-between gap-x-6">
            <p class="text-base font-normal leading-normal text-zinc-500 ">Envío</p>
            <p class="text-right text-base font-medium leading-normal text-zinc-900 ">$5.00</p>
        </div>
        <div class="my-2 h-px w-full bg-zinc-200"></div>
        <div class="flex justify-between gap-x-6">
            <p class="text-lg font-bold leading-normal text-zinc-900 ">Total</p>
            <p class="text-right text-lg font-bold leading-normal text-zinc-900 ">$165.49</p>
        </div>
    </div>
    <button class="h-14 w-full cursor-pointer rounded-xl bg-primary text-base font-bold leading-normal text-white shadow-lg shadow-primary/30 transition-transform duration-200 active:scale-95">
        Proceder al Pago
    </button>
</div>