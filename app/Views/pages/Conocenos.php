<?php
// <!-- HISTORIA -->
if ($imagenPrincipal != '' || $historiaEmpresa != '') {
    include __DIR__ . '/../components/conocenos/historia.php';
}
// <!-- MISION Y VISION -->
if ($mision != '' || $vision != '') {
    include __DIR__ . '/../components/conocenos/misionVision.php';
}
// <!-- VALORES -->
if ($cantidadValores > 0) {
    include __DIR__ . '/../components/conocenos/valores.php';
}

// <!-- BOTON PRODUCTOS -->
include __DIR__ . '/../components/generales/botonProductos.php';
?>

