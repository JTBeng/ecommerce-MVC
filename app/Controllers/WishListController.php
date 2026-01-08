<?php

namespace App\Controllers;

use App\Models\WishListModel;

class WishListController
{
    public function index()
    {
        $title = 'Lista de Deseos';
        $wishList = (new WishListModel())->getWishList();
        //ARTICULOS WISH
        $products = $wishList;
        $gridClasses = 'sm:grid-cols-2 lg:grid-cols-3';
        $mensajeSinProductos = 'No hay productos en la lista de deseos.';
        $cant = 0;

        $contentView = __DIR__ . '/../Views/pages/WishList.php';
        $contentJs =  '/assets/js/wishList.js';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }

}