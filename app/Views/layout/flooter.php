<?php ?>
<footer class="bg-white text-center text-sm text-gray-600 pt-10 mt-10 shadow">

    <!-- Contenido superior con 4 columnas -->
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-left pb-6">

        <!-- Logo + link -->
        <div>
            <a href="/" class="flex items-center space-x-2">
                <img src="<?= $config['logo_empresa'] ?>" alt="Logo" class="h-10 w-auto">
            </a>
        </div>

        <!-- Contacto -->
        <div>
            <h3 class="font-bold mb-2 text-primario">Contacto</h3>
            <p>Email: <?= $config['telefono_empresa'] ?></p>
            <p>Tel: <?= $config['email_empresa'] ?></p>
            <p>Dirección: <?= $config['direccion_empres'] ?></p>
        </div>

        <!-- Políticas -->
        <div>
            <h3 class="font-bold mb-2 text-primario">Información Legal</h3>
            <ul class="space-y-1">
                <li><a href="/terminos-y-condiciones" class="hover:underline">Términos y Condiciones</a></li>
                <li><a href="/politica-devolucion" class="hover:underline">Política de Devolución</a></li>
            </ul>
        </div>

        <!-- Redes sociales -->
        <div>
            <h3 class="font-bold mb-2 text-primario">Redes Sociales</h3>
            <div class="flex space-x-4 justify-start">
                <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                    <!-- <img src="/icons/facebook.svg" alt="Facebook" class="h-6 w-6"> -->
                </a>
                <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                    <!-- <img src="/icons/twitter.svg" alt="Twitter" class="h-6 w-6"> -->
                </a>
                <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                    <!-- <img src="/icons/instagram.svg" alt="Instagram" class="h-6 w-6"> -->
                </a>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-200 pt-4">
        <p class="text-gray-500">
            Copyright &copy; <?= date("Y") ?> Todos los derechos reservados. Desarrollado por
            <a href="https://empresistemas.com" class="text-blue-600 hover:underline">Empresistemas</a>
        </p>
    </div>

</footer>