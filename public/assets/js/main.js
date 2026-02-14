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
                    const enOferta = item.en_oferta != '';
                    box.innerHTML += `
                                        <div 
                                            class="autocomplete-item flex items-center gap-3 p-3 cursor-pointer transition-all duration-200
                                            ${enOferta
                                                            ? 'bg-gradient-to-r from-pink-50 to-rose-50 hover:scale-[1.02] border-l-4 border-pink-500 shadow-sm'
                                                            : 'hover:bg-gray-100'
                                                        }"
                                            data-id="${item.id}"
                                        >

                                            <!-- Imagen -->
                                            <img 
                                                src="https://wenzhou.erponweb.com.mx/customcode/imagenes/${item.nombre_imagen}" 
                                                class="w-12 h-12 object-cover rounded ${enOferta ? 'ring-2 ring-pink-400' : ''}"
                                            />

                                            <!-- Info -->
                                            <div class="flex flex-col flex-1">
                                                
                                                <!-- Nombre -->
                                                <span class="text-sm font-medium ${enOferta ? 'text-pink-700' : ''}">
                                                    ${item.name}
                                                </span>

                                                <!-- Precio -->
                                                <div class="flex items-center gap-2">

                                                    <span class="text-sm font-bold ${enOferta ? 'text-pink-600 text-base' : ''}">
                                                        $${item.precio_final}
                                                    </span>

                                                    ${enOferta
                                                            ? `<span class="text-xs bg-pink-500 text-white px-2 py-0.5 rounded-full animate-pulse">
                                                                🔥 OFERTA
                                                        </span>`
                                                            : ''
                                                        }

                                                </div>
                                            </div>
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
