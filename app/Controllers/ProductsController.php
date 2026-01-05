<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class ProductsController
{
    public function index($campoExtra = null, $valor= null)
    {
        $title = 'Productos';
        $categorias = (new ProductsModel())->getCategoriasConConteo_Products();
        $products = (new ProductsModel())->getPaginated_Products(12, 0, 0, 0, 999999, '', $campoExtra, $valor);

        $contentView = __DIR__ . '/../Views/pages/products.php';
        $contentJs =  '/assets/js/products.js';
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
        $campoExtra = isset($_GET['campoExtra']) && $_GET['limpiar'] == 0 ? $_GET['campoExtra'] : null;
        $valorExtra = isset($_GET['valorExtra']) && $_GET['limpiar'] == 0  ? $_GET['valorExtra'] : null;

        $limit = 12;
        $offset = ($page - 1) * $limit;

        $model = new ProductsModel();
        $products = $model->getPaginated_Products($limit, $offset, $categorias, $precioMin, $precioMax, $sort, $campoExtra, $valorExtra);

        header('Content-Type: application/json');
        echo json_encode($products);
        exit;
    }
}
