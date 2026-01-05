<?php

namespace Core;

class Router
{
    public function dispatch($url)
    {
        if (empty($url)) {
            $url = 'home/index';
        }


        $segments = explode('/', trim($url, '/'));
        $controllerName = ucfirst($segments[0] ?: 'Pagina') . 'Controller';
        $method = $segments[1] ?? 'index';
        $params = array_slice($segments, 2);

        $controllerClass = "App\\Controllers\\$controllerName";

        // 1. Intentar cargar un controlador normal
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], $params);
                return;
            }
        }

        // 2. Si no existe controlador, interpretamos como página estática
        if (!empty($segments[0])) {
            $pagina = $segments[0];
            $controller = new \App\Controllers\PaginaController();
            $controller->ver($pagina);
            return;
        }

        // 3. Si no hay nada, cargar Home
        $controllerClass = "App\\Controllers\\HomeController";
        $method = 'index';
        $params = [];
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], $params);
                return;
            }
        }
    }
}
