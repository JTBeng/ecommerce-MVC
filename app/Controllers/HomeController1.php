<?php
namespace App\Controllers;

use App\Models\ProductModel;

class HomeController {
    public function index() {
        $title = 'Productos';
        $products = (new ProductModel())->getAll();
        $contentView = __DIR__ . '/../Views/pages/products.php';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }
}
