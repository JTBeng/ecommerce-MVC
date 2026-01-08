<!-- CANTIDAD PRODUCTOS -->
<div class="mt-7 flex items-center justify-between bg<?= $config['base_clara'] ?> rounded-xl p-2 w-full sm:w-auto">
    <button id="cantidad_menos" type="button" class="cantidad_menos modificar_cantidad flex h-10 w-10 items-center justify-center rounded-l-lg text-slate-600  hover:bg<?= $config['color_secundario'] ?> transition-colors">
        <span class="cantidad_menos material-symbols-outlined text-2xl">remove</span>
    </button>
    <input
        type="text"
        id="cantidad_input"
        name="cantidad_input"
        class="
                        px-4 text-lg font-bold 
                        bg-transparent 
                        border-none outline-none 
                        text-center 
                        text-slate-900 
                        
                        text-slate-600 
                        "
        value="1"
        readonly>
    <button id="color_secundario" type="button" class="cantidad_mas modificar_cantidad flex h-10 w-10 items-center justify-center rounded-r-lg text-slate-600 hover:bg<?= $config['color_secundario'] ?> transition-colors">
        <span class="cantidad_mas material-symbols-outlined text-2xl">add</span>
    </button>
</div>

<!-- AGG  CARRITO Y DESEOS -->
<div class="mt-7 flex flex-row justify-center items-center gap-6">
    <button class=" w-full py-2 rounded-xl bg-gradient-to-r from<?= $config['color_principal'] ?> to<?= $config['color_secundario'] ?> text-white font-semibold shadow hover:scale-105 transition-transform duration-300">
        Agregar al Carrito
    </button>
    <button
        class="flex h-10 w-20 items-center justify-center rounded-full bg-white text<?= $config['color_principal'] ?> shadow hover:scale-110 transition-transform duration-300">
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