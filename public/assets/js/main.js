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
//BUSCADOR DE PRODUCTOS
const input = document.getElementById("searchInput");
const box = document.getElementById("autocompleteResults");

let debounce;

input.addEventListener("input", () => {
    clearTimeout(debounce);

    const value = input.value.trim();

    if (value.length < 2) {
        box.innerHTML = "";
        box.classList.add("hidden");
        return;
    }

    debounce = setTimeout(() => {
        fetch("/ajax/search", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "q=" + encodeURIComponent(value)
        })
        .then(res => res.json())
        .then(data => {
            console.log(data);
            box.innerHTML = "";
            if (!data.length) {
                box.classList.add("hidden");
                return;
            }
            box.classList.remove("hidden");
            data.forEach(item => {
                box.innerHTML += `
                    <div class="autocomplete-item flex items-center gap-3 p-2 hover:bg-gray-100 cursor-pointer" data-id="${item.id}">
                        <img src="https://wenzhou.erponweb.com.mx/customcode/imagenes/${item.nombre_imagen}" class="w-10 h-10 object-cover rounded" />
                        <span class="text-sm">${item.name}</span>
                    </div>
                `;
            });
        });
    }, 300);
});

box.addEventListener("click", e => {
    const item = e.target.closest(".autocomplete-item");
    if (!item) return;

    window.location.href = "/product?id=" + item.dataset.id;
});
