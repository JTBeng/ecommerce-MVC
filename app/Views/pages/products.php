<section class="container mx-auto flex-grow max-w-[1200px] border-b py-5 lg:flex lg:flex-row lg:py-10 text-xl lg:text-sm">
  <?php
  // <!-- FILTROS -->
  include __DIR__ . '/../components/products/filtros.php';
  ?>
  <div>
    <?php
    // <!-- PRODUCTOS -->
    include __DIR__ . '/../components/generales/catalog_product_card.php';
    // <!-- ICONO RECARGAR -->
    include __DIR__ . '/../components/products/loading.php';
    ?>
  </div>
</section>