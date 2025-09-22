<!-- <img src="<?= $config['img_principal'] ?>" alt="Logo empresa" class="w-full h-auto"> -->
<!-- CARRETE DE IMAGENES PRINCIPAL -->
<div class="relative w-full max-w-4xl mx-auto">
  <!-- Botón izquierdo -->
  <button id="prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-md">
    ◀
  </button>

  <!-- Contenedor del carrete -->
  <div id="carrete" class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory no-scrollbar">
    <div class="min-w-[200px] snap-center bg-blue-500 text-white p-6 rounded-xl shadow">Componente 1</div>
    <div class="min-w-[200px] snap-center bg-green-500 text-white p-6 rounded-xl shadow">Componente 2</div>
    <div class="min-w-[200px] snap-center bg-purple-500 text-white p-6 rounded-xl shadow">Componente 3</div>
    <div class="min-w-[200px] snap-center bg-red-500 text-white p-6 rounded-xl shadow">Componente 4</div>
    <div class="min-w-[200px] snap-center bg-yellow-500 text-white p-6 rounded-xl shadow">Componente 5</div>
  </div>

  <!-- Botón derecho -->
  <button id="next" class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-md">
    ▶
  </button>
</div>
