<?php

namespace App\Controllers;

use App\Models\WishListModel;

class WishListController
{
    public function index()
    {
        $title = 'Lista de Deseos';
        $wishList = (new WishListModel())->getWishList();

        $contentView = __DIR__ . '/../Views/pages/WishList.php';
        $contentJs =  '/assets/js/wishList.js';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }

}