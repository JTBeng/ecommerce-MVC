<?php

namespace App\Controllers;

use App\Models\HomeModel;

class HomeController
{
    public function index()
    {
        $title = 'Home';
        $elementos_CarretePrincipal = (new HomeModel())->getCarrete_Principal();
        $categoriasPrincipales = (new HomeModel())->getCategoriasPrincipales();
        $contentView = __DIR__ . '/../Views/pages/home.php';
        $contentJs = '/assets/js/home.js';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }
}
