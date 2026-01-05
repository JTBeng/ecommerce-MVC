<?php

namespace App\Models;

use Core\Database;

require_once __DIR__ . '/../../core/Database.php';

class cartModel
{
    // Productos LISTA DE DESEOS
    public function getCart()
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
        $sql .=    " LIMIT 5";
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
}
