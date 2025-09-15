<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController
{
    public function index()
    {
        $title = 'Productos';
        $categorias = (new ProductModel())->getCategoriasConConteo_Products();
        $products = (new ProductModel())->getPaginated_Products(12, 0, 0, 0, 999999, '');

        $contentView = __DIR__ . '/../Views/pages/product.php';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }
    //CARGA SCROLL
    public function paginate_Products()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $categorias = isset($_GET['categorias']) ? $_GET['categorias'] : '0';
        $precioMin = isset($_GET['precio_min']) ? $_GET['precio_min'] : '0';
        $precioMax = isset($_GET['precio_max']) ? $_GET['precio_max'] : '999999';
        $sort = isset($_GET['sort']) ? $_GET['sort'] : '';

        $limit = 12;
        $offset = ($page - 1) * $limit;

        $model = new ProductModel();
        $products = $model->getPaginated_Products($limit, $offset, $categorias, $precioMin, $precioMax, $sort);

        header('Content-Type: application/json');
        echo json_encode($products);
        exit;
    }
}
