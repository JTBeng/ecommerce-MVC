<?php

namespace App\Models;

use Core\Database;

require_once __DIR__ . '/../../core/Database.php';

class SearchModel
{
    public function autocomplete($name)
    {
        $conn = Database::connect();
        $hoy = date('Y-m-d');
        $sql = "SELECT p.name AS name, 
                p.price AS price, 
                p.id AS id, 
                pc.nombre_imagen_c AS nombre_imagen,
                p.deleted AS productoEliminado,
                pc.marca_c AS marca,
                p.category AS categoria,
                pc.clase_c AS subcategoria,
                promo.precio_promo AS precio_promo, 
                promo.porcentaje_descuento AS porcentaje_descuento,
                p.description AS descripcion,
                pc.descripcion_extendida_c AS descripcion_completa,
                pc.volumen_c AS peso_unidad 
                FROM aos_products p 
                LEFT JOIN aos_products_cstm pc 
                ON p.id = pc.id_c
            LEFT JOIN jb_jb_promociones_ecommer promo 
                ON promo.aos_products_id_c = p.id
                AND '$hoy' BETWEEN promo.inicio_promo AND promo.fin_promo
                WHERE p.name LIKE '$name' LIMIT 10";
        $result = $conn->query($sql);
        //echo $sql;
        $productosBusqueda = [];
        if ($result && $result->num_rows > 0) {
            while ($fila = $result->fetch_assoc()) {
                $productosBusqueda[] = $fila;
            }
        }
        return $productosBusqueda;
    }
}
