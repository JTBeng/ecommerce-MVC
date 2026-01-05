document.addEventListener("click", function (e) {
    const btn = e.target.closest(".modificar_cantidad");
    if (!btn) return;

    let id = btn.id;

    let partes = id.split("_");
    let tipo = partes[0] + "_" + partes[1];
    let num = partes[2] ? '_' + partes[2] : ''; // _3 o ''

    cantidadProductos(tipo, num);
});


function cantidadProductos(idInput, num) {
    let cantidad = parseInt(document.getElementById('cantidad_input' + num).value) || 1;
    if (idInput === 'cantidad_menos') {
        console.log('MENOS');
        cantidad--;
        if (cantidad <= 0) cantidad = 1;

    } else {
        console.log('mas');
        cantidad++;
    }
    document.getElementById('cantidad_input' + num).value = cantidad;
}