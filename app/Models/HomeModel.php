<?php

namespace App\Models;

use Core\Database;

require_once __DIR__ . '/../../core/Database.php';

class HomeModel
{
    public function getCarrete_Principal()
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM jb_carrete_principal_ecommerce WHERE deleted = '0' AND estatus = 'Activo' ORDER BY orden";
        $result = $conn->query($sql);

        $elementos_CarretePrincipal = [];
        if ($result && $result->num_rows > 0) {
            while ($fila = $result->fetch_assoc()) {
                $elementos_CarretePrincipal[] = $fila;
            }
        }
        return $elementos_CarretePrincipal;
    }

    public function getCategoriasPrincipales()
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM ob_categorias_ecommerce LEFT JOIN ob_categorias_ecommerce_cstm ON id = id_c WHERE deleted = '0' AND estatus = 'Activo' AND destacado_c = '1' ORDER BY name";
        $result = $conn->query($sql);

        $categoriasPrincipales = [];
        if ($result && $result->num_rows > 0) {
            while ($fila = $result->fetch_assoc()) {
                $categoriasPrincipales[] = $fila;
            }
        }
        return $categoriasPrincipales;
    }
}
