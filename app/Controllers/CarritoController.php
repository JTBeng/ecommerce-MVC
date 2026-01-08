<?php

namespace App\Controllers;

use App\Models\carritoModel;

class carritoController
{
    public function index()
    {
        //GENERALES
        $title = 'Lista de Deseos';
        $carritoList = (new carritoModel())->getCarrito();
        //ARTICULOS CARRITO
        $products = $carritoList;
        $context = 'carrito';
        $gridClasses = 'grid-cols-1';
        $mensajeSinProductos = 'No hay productos en el Carrito.';
        $cant = 0;
        //TOTALES
        $total = 0;
        $cantTotal = 0;
        $costoEnvio = 0; //ESTATICO DE MOMENTO
        foreach ($products as $product) {
            $cantidad = $product['quantity'] ?? 1;
            $precio   = $product['price'];
            $subtotal = $precio * $cantidad;
            $total += $subtotal;
            $cantTotal += $cantidad;
        }
        $totalGeneral = $total + $costoEnvio;

        $contentView = __DIR__ . '/../Views/pages/carrito.php';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }
}
