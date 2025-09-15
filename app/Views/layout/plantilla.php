<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? $config['nombre_empresa'] ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="<?= $config['base_clara'] ?>">
    <?php require __DIR__ . '/header.php'; ?>

    <main class="container mx-auto mt-10">
        <?php include $contentView; ?>
    </main>

    <?php require __DIR__ . '/flooter.php'; ?>

    <script src="/assets/js/main.js"></script>

</body>

</html>