<?php

namespace App\Controllers;

use App\Models\cartModel;

class cartController
{
    public function index()
    {
        $title = 'Lista de Deseos';
        $cartList = (new cartModel())->getCart();

        $contentView = __DIR__ . '/../Views/pages/cart.php';
        $contentJs =  '/assets/js/cart.js';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }

}