<section class="container mx-auto max-w-[1200px] px-5 py-5 lg:py-10">
    <?php if (!empty($product['descripcion_completa'])) { ?>
        <h2 class="text-xl">Detalles</h2>
        <p class="mt-4 lg:w-3/4">
            <?= $product['descripcion_completa'] ?>
        </p>
    <?php
    }
    ?>
    <!-- TABLA CARACTERISTICAS -->
    <?php if (!empty($product['peso_unidad'])) { ?>
        <table class="mt-7 w-full table-auto divide-x divide-y lg:w-1/2">
            <tbody class="divide-x border">
                <tr>
                    <td class="border pl-4 font-bold">Peso por unidad</td>
                    <td class="border pl-4"><?= $product['peso_unidad'] ?></td>
                </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
</section>