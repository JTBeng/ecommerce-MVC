<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController
{
    public function detail($id = null)
    {
        $title = 'Productos';
        $product = (new ProductModel())->getProduct($id);
        $products = (new ProductModel())->getProductsRelated($product['categoria']);
        // var_dump($products);
        $contentView = __DIR__ . '/../Views/pages/product.php';
        $contentJs =  '/assets/js/product.js';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }

}
