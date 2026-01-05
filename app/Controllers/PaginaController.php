<?php

namespace App\Controllers;

class PaginaController
{
    public function ver($nombreVista = 'Home')
    {
        $title = ucfirst($nombreVista);
        $rutaVista = __DIR__ . "/../Views/pages/$nombreVista.php";

        if (file_exists($rutaVista)) {
            $contentView = $rutaVista;
            require __DIR__ . '/../Views/layout/plantilla.php';
        } else {
            http_response_code(404);
            $rutaVista = __DIR__ . "/../Views/pages/404.php";
            $contentView = $rutaVista;
            require __DIR__ . '/../Views/layout/plantilla.php';
        }
    }
}
