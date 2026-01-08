<!-- GALERIA IMAGENES DE PRODUCTOS, DESCRIPCION BASICA, CANTIDAD PRODUCTOS, AGG  CARRITO Y DESEOS-->
<section class="container flex-grow mx-auto max-w-[1200px] border-b py-5 lg:grid lg:grid-cols-2 lg:py-10">
    <!-- GALERIA IMAGENES DE PRODUCTOS -->
    <?php
    include __DIR__ . '/../components/product/galeriaProducto.php';
    ?>
    <div class="mx-auto px-5 lg:px-5">
        <!-- DESCRIPCION BASICA -->
        <?php
        include __DIR__ . '/../components/product/descripcionBasica.php';
        ?>
        <!-- CANTIDAD PRODUCTOS, AGG  CARRITO Y DESEOS -->
        <?php
        include __DIR__ . '/../components/product/productoAccionesCompra.php';
        ?>
    </div>
</section>
<!-- DETALLES AVANZADOS-->
<?php
include __DIR__ . '/../components/product/detallesAvanzados.php';
?>
<!-- RECOMENDACIONES -->
<?php if (!empty($products)) { ?>
    <p class="mx-auto mt-10 mb-5 max-w-[1200px] px-5">Productos Relacionados</p>
    <?php
    include __DIR__ . '/../components/generales/catalog_product_card.php';
    ?>
<?php
}
?>