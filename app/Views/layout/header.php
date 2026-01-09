<?php $config = $GLOBALS['appConfig']; ?>
<script>
    const appConfig = <?= json_encode($config) ?>;
</script>

<header class="sticky top-0 z-10 flex items-center justify-between bg<?= $config['color_principal'] ?>/15 px-4 backdrop-blur-sm">
    <a href="/contacto">
        <!-- Logo -->
        <div class="flex items-center gap-3">
            <img src="<?= $config['logo_empresa'] ?>" alt="Logo empresa" class="cursor-pointer h-16 w-full">
        </div>
    </a>

    <div class="md:hidden">
        <button @click="mobileMenuOpen = ! mobileMenuOpen">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-8 w-8">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>

    <form
        class="
        hidden md:flex items-center
        w-full max-w-xl
        h-10
        rounded-xl
        border border-gray-200
        bg-white
        shadow-sm
        focus-within:ring-2 focus-within:ring<?= $config['color_principal'] ?>
    ">
        <!-- ICONO -->
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            class="ml-3 h-5 w-5 text-gray-400">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <!-- INPUT -->
        <input type="search" placeholder="Buscar productos" class=" border border-gray-200/40 flex-1 px-3 text-sm outline-none bg-transparent placeholder-gray-400" />
        <!-- BOTÓN -->
        <button type="submit" class="h-full px-5 rounded-r-xl bg<?= $config['base_clara'] ?> text-sm font-semibold transition hover:bg<?= $config['hover'] ?>">
            Buscar
        </button>
    </form>

    <div class=" hidden gap-3 md:!flex">
        <a
            href="/"
            class="flex cursor-pointer flex-col items-center justify-center">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M2.25 12l9-9 9 9M4.5 9.75v10.5a1.5 1.5 0 001.5 1.5h3.75v-6h4.5v6H18a1.5 1.5 0 001.5-1.5V9.75" />
            </svg>


            <p class="text-xs">Inicio</p>
        </a>
        <a
            href="/products"
            class="flex cursor-pointer flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M21 16V8l-9-5-9 5v8l9 5 9-5z" />
            </svg>


            <p class="text-xs">Productos</p>
        </a>

        <a
            href="/wishlist"
            class="flex cursor-pointer flex-col items-center justify-center">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>

            <p class="text-xs">Lista de deseos</p>
        </a>

        <a
            href="carrito"
            class="flex cursor-pointer flex-col items-center justify-center">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-6 w-6">
                <path
                    fill-rule="evenodd"
                    d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                    clip-rule="evenodd" />
            </svg>

            <p class="text-xs">Carrito</p>
        </a>

        <a
            href="login"
            class="relative flex cursor-pointer flex-col items-center justify-center">
            <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                <span
                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                <span
                    class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
            </span>

            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>

            <p class="text-xs">Cuenta</p>
        </a>
    </div>
</header>
<section
    x-show="mobileMenuOpen"
    @click.outside="mobileMenuOpen = false"
    class="absolute left-0 right-0 z-50 h-screen w-full bg-white"
    style="display: none">
    <div class="mx-auto">
        <div class="mx-auto flex w-full justify-center gap-3 py-4">
            <a
                href="/wishlist"
                class="flex cursor-pointer flex-col items-center justify-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>

                <p class="text-xs">Lista de Deseos</p>
            </a>

            <a
                href="carrito"
                class="flex cursor-pointer flex-col items-center justify-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-6 w-6">
                    <path
                        fill-rule="evenodd"
                        d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                        clip-rule="evenodd" />
                </svg>

                <p class="text-xs">Carrito</p>
            </a>

            <a
                href="login"
                class="relative flex cursor-pointer flex-col items-center justify-center">
                <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                    <span
                        class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
                </span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

                <p class="text-xs">Cuenta</p>
            </a>
        </div>

        <form class="my-4 mx-5 flex h-9 items-center border">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="mx-3 h-4 w-4">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

            <input
                class="hidden w-11/12 outline-none md:block"
                type="search"
                placeholder="Search" />

            <button
                type="submit"
                class="ml-auto h-full bg<?= $config['base_clara'] ?> px-4 ">
                Buscar
            </button>
        </form>
        <ul class=" text-center font-medium">
            <li class="py-2"><a href="/">Inicio</a></li>
            <li class="py-2"><a href="/sobre_nosotros">Sobre nosotros</a></li>
            <li class="py-2"><a href="/products" class="hover:bg<?= $config['hover'] ?>">Productos</a></li>
            <li class="py-2"><a href="conocenos">Conocenos</a></li>
        </ul>
    </div>
</section>