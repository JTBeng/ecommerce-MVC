<?php

namespace App\Models;

use Core\Database;

require_once __DIR__ . '/../../core/Database.php';

class ConocenosModel
{
    public function getConocenos()
    {
        $conn = Database::connect();
        $sql = "SELECT * FROM jb_administracion_ecommerce 
                LEFT JOIN jb_administracion_ecommerce_cstm  
                ON jb_administracion_ecommerce.id = jb_administracion_ecommerce_cstm.id_c          
        LIMIT 1";

        // var_dump($sql);
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            $fila = $result->fetch_assoc();
            return $fila;
        }

        return null;
    }
}
