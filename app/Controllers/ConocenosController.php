<?php

namespace App\Controllers;

use App\Models\ConocenosModel;

class ConocenosController
{
    public function index()
    {
        $title = 'Conocenos';
        $conocenos = (new ConocenosModel())->getConocenos();
        //HISTORIA E IMAGEN PRINCIPAL
        $imagenPrincipal = $conocenos['imagen_principal_c'] != '' ? $conocenos['imagen_principal_c'] : '';
        $historiaEmpresa = $conocenos['historia_empresa'] != '' ? $conocenos['historia_empresa'] : '';
        $columnasHistoria = ($conocenos['imagen_principal_c'] != '' && $conocenos['historia_empresa'] != '') ? 2 : 1;
        //MANEJO DE COLUMNAS MISION Y VISION
        $tituloMision = $conocenos['mision_empresa'] != '' ? 'Misión' : '';
        $mision = $conocenos['mision_empresa'] != '' ? $conocenos['mision_empresa'] : '';
        $tituloVision = $conocenos['vision_empresa'] != '' ? 'Visión' : '';
        $vision = $conocenos['vision_empresa'] != '' ? $conocenos['vision_empresa'] : '';
        $columnasMisionVision = $conocenos['mision_empresa'] != '' && $conocenos['vision_empresa'] != '' ? 2 : 1;
        //MANEJO DE COLUMNAS VALORES
        $cantidadValores = 0;
        $valores = [
            $conocenos['valor_ecommerce1'],
            $conocenos['valor_ecommerce2'],
            $conocenos['valor_ecommerce3'],
            $conocenos['valor_ecommerce4'],
        ];
        $titulosValores = [
            $conocenos['titulo_valor_ecommerce1_c'],
            $conocenos['titulo_valor_ecommerce2_c'],
            $conocenos['titulo_valor_ecommerce3_c'],
            $conocenos['titulo_valor_ecommerce4_c'],
        ];
        $iconosValores = [
            $conocenos['icono_valor_empresa1'],
            $conocenos['icono_valor_empresa2'],
            $conocenos['icono_valor_empresa3'],
            $conocenos['icono_valor_empresa4'],
        ];
        foreach ($valores as $valor) {
            if ($valor !== '' && $valor !== null) {
                $cantidadValores++;
            }
        }
        // var_dump($conocenos);
        $contentView = __DIR__ . '/../Views/pages/Conocenos.php';
        // $contentJs =  '/assets/js/conocenos.js';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }
}
