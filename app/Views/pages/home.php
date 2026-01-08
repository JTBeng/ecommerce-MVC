<?php
include __DIR__ . '/../components/home/carrete.php';
include __DIR__ . '/../components/home/cuadricula_imagenes.php';

if (!empty($elementos_CarretePrincipal)) {
  carrete("principal", $elementos_CarretePrincipal, $config);
}

if (!empty($categoriasPrincipales)) {
  cuadriculaImg('Especialidades', $categoriasPrincipales);
}
?>