<?php
require_once __DIR__ . "/Components/carrete.php";
require_once __DIR__ . "/Components/cuadricula_imagenes.php";

if (!empty($elementos_CarretePrincipal)) {
  carrete("principal", $elementos_CarretePrincipal, $config);
}
?>
<br>
<?php
if (!empty($categoriasPrincipales)) {
  cuadriculaImg('Especialidades', $categoriasPrincipales);
}
?>