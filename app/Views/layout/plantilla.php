<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= $title ?? $config['nombre_empresa'] ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#ec13bdff",
                        "background-light": "#fdeffdff",
                    },
                    fontFamily: {
                        display: "Public Sans"
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        lg: "1rem",
                        xl: "1.5rem",
                        full: "9999px"
                    }
                }
            }
        };
    </script>
</head>

<body x-data="{ desktopMenuOpen: false, mobileMenuOpen: false} ">
    <main class="h-screen flex flex-col justify-between">
        <?php require __DIR__ . '/header.php'; ?>

        <!-- <main class="container mx-auto mt-10"> -->
        <?php include $contentView; ?>
        <!-- </main> -->

        <?php require __DIR__ . '/flooter.php'; ?>
        <script src="/assets/js/main.js"></script>
        <script src="<?= empty($contentJs) ? '' : $contentJs ?>"></script>

    </main>
</body>

</html>