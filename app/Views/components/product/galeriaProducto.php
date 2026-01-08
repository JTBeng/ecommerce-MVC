<div class="container mx-auto px-4 relative">
    <img class="w-full" src="https://wenzhou.erponweb.com.mx/customcode/imagenes/<?= $product['nombre_imagen'] ?>" alt="<?= $product['name'] ?>" />
    <!-- DESCUENTO -->
    <?php if ($product['en_oferta']): ?>
        <div class="absolute top-3 right-3">
            <span class="bg<?= $config['color_secundario'] ?> text-white font-bold px-2 py-1 rounded-full shadow">
                -<?= $product['porcentaje_descuento'] ?>&percnt; OFF
            </span>
        </div>
    <?php endif; ?>
    <!-- DESCUENTO -->
</div>