<?php

namespace App\Controllers;

use App\Models\SearchModel;

class SearchController
{
    protected SearchModel $model;

    public function __construct()
    {
        $this->model = new SearchModel();
    }

    public function autocomplete(string $q): array
    {
        if (strlen($q) < 2) {
            return [];
        }

        return $this->model->autocomplete($q);
    }
}