<?php

namespace App\Models;

use Core\Database;

require_once __DIR__ . '/../../core/Database.php';

class ProductsModel
{
    // Todos los productos
    // public function getAll_Products($tabla, $custom)
    // {
    //     $conn = Database::connect();
    //     $cstm = $custom == 1 ? " LEFT JOIN " . $tabla . "_cstm ON id = id_c" : "";
    //     $sql = "SELECT * FROM $tabla $cstm WHERE deleted = 0";
    //     $result = $conn->query($sql);

    //     $productos = [];
    //     if ($result && $result->num_rows > 0) {
    //         while ($fila = $result->fetch_assoc()) {
    //             $fila['precio_final']   = !empty($fila['precio_promo'])         ? $fila['precio_promo'] : $fila['price'];
    //             $fila['en_oferta']      = !empty($fila['porcentaje_descuento']) && $fila['porcentaje_descuento'] > 0;

    //             $productos[] = $fila;
    //         }
    //     }
    //     return $productos;
    // }

    // Productos paginados
    public function getPaginated_Products($limit, $offset, $categorias, $precioMin, $precioMax, $sort, $filtroExtra, $valorFiltroExtra)
    {
        $conn = Database::connect();
        $hoy = date('Y-m-d');

        $sql = "SELECT p.name AS name, p.price AS price, p.id AS id, promo.precio_promo AS precio_promo, promo.porcentaje_descuento AS porcentaje_descuento, pc.nombre_imagen_c AS nombre_imagen 
                FROM aos_products p
            LEFT JOIN aos_products_cstm pc 
                   ON p.id = pc.id_c
            LEFT JOIN jb_jb_promociones_ecommer promo 
                   ON promo.aos_products_id_c = p.id
                  AND '$hoy' BETWEEN promo.inicio_promo AND promo.fin_promo
            WHERE p.deleted = '0'";
        //FILTRAR POR CATEGORIA
        if ($categorias != '0') {
            $catsArray = explode(',', $categorias);
            $catsArray = array_map(function ($cat) use ($conn) {
                return "'" . $conn->real_escape_string(trim($cat)) . "'";
            }, $catsArray);

            $catsString = implode(',', $catsArray);
            $sql .= " AND category IN ($catsString) ";
        }
        //FILTRAR POR PRECIO
        $precioMin = (float)$precioMin;
        $precioMax = (float)$precioMax;
        $sql .= " AND p.price BETWEEN $precioMin AND $precioMax";
        //DATO EXTRA
        if (!empty($filtroExtra) && empty($valorFiltroExtra)) {
            $sql .= " AND ($filtroExtra != '' OR $filtroExtra is not null) ";
        }
        if (!empty($filtroExtra) && !empty($valorFiltroExtra)) {
            $sql .= " AND $filtroExtra = '$valorFiltroExtra' ";
        }
        //ORDENAR
        switch ($sort) {
            case 'price_asc':
                $sql .= " ORDER BY price ASC";
                break;
            case 'price_desc':
                $sql .= " ORDER BY price DESC";
                break;
            case 'name_asc':
                $sql .= " ORDER BY name ASC";
                break;
            case 'name_desc':
                $sql .= " ORDER BY name DESC";
                break;
            default:
                $sql .= " ORDER BY id DESC"; // Orden por defecto
                break;
        }

        // Paginación
        $sql .=    " LIMIT $limit OFFSET $offset";
        // var_dump($sql);
        $result = $conn->query($sql);

        $productos = [];
        if ($result && $result->num_rows > 0) {
            while ($fila = $result->fetch_assoc()) {
                $fila['precio_final']   = !empty($fila['precio_promo'])         ? $fila['precio_promo'] : $fila['price'];
                $fila['en_oferta']      = !empty($fila['porcentaje_descuento']) && $fila['porcentaje_descuento'] > 0;

                $fila['porcentaje_descuento'] = ($fila['porcentaje_descuento'] == floor($fila['porcentaje_descuento']))
                    ? intval($fila['porcentaje_descuento'])
                    : $fila['porcentaje_descuento'];

                $productos[] = $fila;
            }
        }
        return $productos;
    }

    public function getCategoriasConConteo_Products()
    {
        $conn = Database::connect();

        $sql = "
        SELECT c.categoria, c.name AS name, c.estatus, COUNT(p.id) AS total_productos
        FROM ob_categorias_ecommerce c
        LEFT JOIN aos_products p ON p.category = c.categoria
        WHERE p.deleted = 0 OR p.deleted IS NULL
        GROUP BY c.categoria
        ORDER BY c.categoria ASC
    ";

        $result = $conn->query($sql);

        $categorias = [];
        if ($result && $result->num_rows > 0) {
            while ($fila = $result->fetch_assoc()) {
                $categorias[] = $fila;
            }
        }
        return $categorias;
    }
}
