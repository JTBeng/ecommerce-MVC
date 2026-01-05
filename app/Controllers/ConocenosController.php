<?php

namespace App\Controllers;

use App\Models\ConocenosModel;

class ConocenosController
{
    public function index()
    {
        $title = 'Conocenos';
        $conocenos = (new ConocenosModel())->getConocenos();
        // var_dump($conocenos);
        $contentView = __DIR__ . '/../Views/pages/Conocenos.php';
        // $contentJs =  '/assets/js/conocenos.js';
        require __DIR__ . '/../Views/layout/plantilla.php';
    }

}
