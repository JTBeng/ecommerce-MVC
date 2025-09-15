let page = 2;
let loading = false;
let categoriasSeleccionadasGlobal = '';
let precioMinGlobal = 0;
let precioMaxGlobal = 999999;
let sortGlobal = '';

let color_principal = '-fuchsia-400';
let color_secundario = '-pink-900/70';
let base_clara = '-rose-500/30';
let hover = '-rose-300/20';

window.addEventListener('scroll', () => {
  if (loading) return;
  if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 200) {
    paginateProducts(categoriasSeleccionadasGlobal, precioMinGlobal, precioMaxGlobal, sortGlobal);
  }
});

document.querySelectorAll('.filtro-categoria').forEach(cb => {
  cb.addEventListener('change', () => {
    filtrado();
  });
});


document.getElementById('btn-filtrar-precio').addEventListener('click', () => {
  filtrado();
});

function filtrado() {
  let seleccionados = Array.from(document.querySelectorAll('.filtro-categoria:checked')).map(cb => cb.value);
  categoriasSeleccionadasGlobal = seleccionados.join(',');
  categoriasSeleccionadasGlobal = seleccionados.join(',');
  precioMinGlobal = document.getElementById('precio-min').value || 0;
  precioMaxGlobal = document.getElementById('precio-max').value || 999999;
  sortGlobal = document.getElementById('sort').value || '';

  page = 1;
  document.getElementById('product-grid').innerHTML = '';
  paginateProducts(categoriasSeleccionadasGlobal, precioMinGlobal, precioMaxGlobal, sortGlobal);
}

function paginateProducts(categoriasSeleccionadas = '', precioMin = 0, precioMax = 999999, orden = '') {
  loading = true;
  document.getElementById('loading').classList.remove('hidden');

  let query = `?page=${page}`;
  if (categoriasSeleccionadas) query += `&categorias=${categoriasSeleccionadas}`;
  if (precioMin) query += `&precio_min=${precioMin}`;
  if (precioMax) query += `&precio_max=${precioMax}`;
  if (orden) query += `&sort=${orden}`;

  fetch(`/product/paginate_Products${query}`)
    .then(res => res.json())
    .then(data => {
      if (Array.isArray(data) && data.length > 0) {
        const grid = document.getElementById('product-grid');
        data.forEach(product => {
          const div = document.createElement('div');
          div.className = "group relative flex flex-col rounded-2xl bg-white shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300";

          div.innerHTML = `
    <!-- Imagen del producto -->
    <div class="relative w-full aspect-square overflow-hidden">
      <img
        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-110"
        src="https://wenzhou.erponweb.com.mx/customcode/imagenes/${product.nombre_imagen}"
        alt="${product.name}" />

      <!-- LETRERO DE DESCUENTO -->
      ${product.precio_promo && product.precio_promo !== ""
              ? `
        <div class="absolute top-3 right-3">
          <span class="bg${color_secundario} text-white text-xs font-bold px-2 py-1 rounded-full shadow">
            -${Number(product.porcentaje_descuento) % 1 === 0
                ? Number(product.porcentaje_descuento).toFixed(0)
                : Number(product.porcentaje_descuento).toFixed(2).replace(/\.?0+$/, '')
              }%
            OFF
          </span>
        </div>
        ` : ``}

      <!-- Overlay con acciones -->
      <div class="absolute inset-0 flex items-center justify-center gap-3 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <a href="product-overview.html"
          class="flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-800 shadow hover:scale-110 transition-transform duration-300">
          <svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor"
            class="h-5 w-5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 
              105.196 5.196a7.5 7.5 0 
              0010.607 10.607z" />
          </svg>
        </a>
        <button
          class="flex h-10 w-10 items-center justify-center rounded-full bg-white text text${color_principal} shadow hover:scale-110 transition-transform duration-300">
          <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5">
            <path
              d="M11.645 20.91l-.007-.003-.022-.012a15.247 
              15.247 0 01-.383-.218 25.18 25.18 0 
              01-4.244-3.17C4.688 15.36 2.25 12.174 
              2.25 8.25 2.25 5.322 4.714 3 7.688 
              3A5.5 5.5 0 0112 5.052 5.5 5.5 0 
              0116.313 3c2.973 0 5.437 2.322 5.437 
              5.25 0 3.925-2.438 7.111-4.739 
              9.256a25.175 25.175 0 01-4.244 
              3.17 15.247 15.247 0 
              01-.383.219l-.022.012-.007.004-.003.001a.752.752 
              0 01-.704 0l-.003-.001z" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Contenido del producto -->
    <div class="p-4">
      <!-- Nombre -->
      <h3 class="text-gray-800 font-semibold truncate">${product.name}</h3>

      <!-- Precio -->
      ${product.precio_promo && product.precio_promo !== ""
              ? `
          <p class="mt-1 text-lg font-bold text${color_principal}">
            $${parseFloat(product.precio_promo).toFixed(2)}
            <span class="ml-2 text-sm text-gray-400 line-through">
              $${parseFloat(product.price).toFixed(2)}
            </span>
          </p>
        `
              : `
          <p class="mt-1 text-lg font-bold text${color_principal}">
            $${parseFloat(product.price).toFixed(2)}
          </p>
        `}

      <!-- Estrellas -->
      <div class="flex items-center mt-2 text-yellow-400">
        ${'<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z"/></svg>'.repeat(4)}
        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z"/></svg>
        <span class="ml-2 text-sm text-gray-400">(38)</span>
      </div>

      <!-- Botón agregar -->
      <button class="mt-4 w-full py-2 rounded-xl bg-gradient-to-r from${color_principal} to${color_secundario} text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
        Agregar al Carrito
      </button>
    </div>   `;
          grid.appendChild(div);
        });
        page++;
      }
      else {
        if (page == 1) {
          grid.innerHTML = `<p>No hay productos disponibles.</p>`;
        }
        else {
          loading = false;
          document.getElementById('loading').classList.add('hidden');
        }
      }

    })
    .catch(err => console.error('Error cargando productos:', err))
    .finally(() => {
      loading = false;
      document.getElementById('loading').classList.add('hidden');
    });
}

function reloadProducts(page = 1) {
  const sort = document.getElementById('sort').value;
  fetch(`/product/paginate_Products?page=${page}&sort=${sort}`)
    .then(res => res.json())
    .then(data => {
      const grid = document.getElementById("product-grid");
      grid.innerHTML = "";
      data.forEach(product => {
        const div = document.createElement("div");
        div.className = "border p-4";
        div.innerHTML = `<p>${product.name}</p><p>$${product.price}</p>`;
        grid.appendChild(div);
      });
    });
}

const btnMenu = document.getElementById("btn-menu");
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");

btnMenu.addEventListener("click", () => {
  sidebar.classList.toggle("-translate-x-full");
  overlay.classList.toggle("hidden");
});

overlay.addEventListener("click", () => {
  sidebar.classList.add("-translate-x-full");
  overlay.classList.add("hidden");
});

