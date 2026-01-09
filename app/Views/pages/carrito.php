<section class="mx-auto w-full max-w-6xl px-4">
    <div class="flex flex-col gap-6 lg:flex-row p-3">
        <!-- PRODUCTOS -->
        <div class="flex-1">
            <?php include __DIR__ . '/../components/generales/catalog_item_card.php'; ?>
        </div>
        <!-- TOTALES -->
        <div class="w-full lg:w-96">
            <?php include __DIR__ . '/../components/carrito/totales.php'; ?>
        </div>
    </div>
</section>
