<?php

namespace App\Controllers;

use App\Controllers\SearchController;

class AjaxController
{
    public function search()
    {
        $q = $_POST['q'] ?? '';

        header('Content-Type: application/json; charset=utf-8');

        $searchController = new SearchController();
        echo json_encode(
            $searchController->autocomplete($q)
        );
    }
}
