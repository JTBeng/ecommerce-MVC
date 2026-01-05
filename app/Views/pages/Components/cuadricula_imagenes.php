<?php
function cuadriculaImg($nombre, $elementos, $config = [])
{
    if (empty($elementos) || !is_array($elementos)) return;

    $count = count($elementos);

    switch ($count) {
        case 1:
            $gridCols = "grid-cols-1";
            break;
        case 3:
            $gridCols = "grid-cols-3";
            break;
        default:
            $gridCols = "grid-cols-2";
            break;
    }
?>
    <section class="mx-auto max-w-[1200px] px-5">
        <h2 class="mx-auto mb-5 font-semibold">
            <?= htmlspecialchars(strtoupper($nombre)) ?>
        </h2>

        <div class="grid <?= $gridCols ?> sm-gap-0  lg:gap-5">
            <?php foreach ($elementos as $item): ?>
                <a href="/products/index/category/<?= htmlspecialchars($item['name']) ?>" class="block">
                    <div class="relative cursor-pointer overflow-hidden rounded-none lg:rounded-lg shadow-md group">
                        <img
                            class="h-[250px] w-full object-cover brightness-50 duration-300 group-hover:brightness-100"
                            src="https://wenzhou.erponweb.com.mx/customcode/Img_Ecommerce/Categoria/<?= htmlspecialchars($item['img_c']) ?>"
                            alt="<?= htmlspecialchars($item['name']) ?>" />
                        <p
                            class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white text-lg font-medium lg:text-xl">
                            <?= htmlspecialchars($item['name']) ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
<?php
}

?>