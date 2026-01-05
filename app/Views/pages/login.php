<div class="relative flex h-auto w-full flex-col items-center justify-center bg-background-light  group/design-root overflow-x-hidden p-4">
    <div class="flex w-full max-w-md flex-col items-center gap-6 rounded-xl bg-white p-6 shadow-sm sm:p-8">
        <div class="flex flex-col items-center gap-2 text-center">
            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-primary/10 mb-4">
                <span class="material-symbols-outlined text-primary text-4xl">storefront</span>
            </div>
            <h1 class="text-[#111618]  tracking-tight text-[32px] font-bold leading-tight">Bienvenido de vuelta</h1>
            <p class="text-gray-600  text-base font-normal leading-normal">Inicia sesión para continuar en tu cuenta.</p>
        </div>
        <form class="flex w-full flex-col gap-4">
            <div class="flex flex-col w-full">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#111618]  text-base font-medium leading-normal pb-2">Correo Electrónico</p>
                    <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111618]   focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe2e6]  bg-white focus:border-primary  h-14 placeholder:text-[#617c89] p-[15px] text-base font-normal leading-normal" placeholder="tu@correo.com" type="email" value="" />
                </label>
            </div>
            <div class="flex flex-col w-full">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#111618]  text-base font-medium leading-normal pb-2">Contraseña</p>
                    <div class="flex w-full flex-1 items-stretch rounded-lg">
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-l-lg text-[#111618]   focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe2e6]  bg-white focus:border-primary  h-14 placeholder:text-[#617c89] p-[15px] border-r-0 pr-2 text-base font-normal leading-normal" placeholder="Ingresa tu contraseña" type="password" value="" />
                        <div class="text-[#617c89]  flex border border-[#dbe2e6]  bg-white  items-center justify-center pr-[15px] rounded-r-lg border-l-0">
                            <span class="material-symbols-outlined cursor-pointer">visibility</span>
                        </div>
                    </div>
                </label>
                <a class="text-primary hover:underline text-sm font-medium text-right mt-2" href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <button class="flex items-center justify-center w-full h-14 px-6 py-3 mt-4 text-base font-bold text-white rounded-full bg<?= $config['color_principal'] ?> hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2  transition-colors duration-300" type="submit">Iniciar Sesión</button>
            <div class="relative flex items-center py-2">
                <div class="flex-grow border-t border-gray-300 "></div>
                <span class="flex-shrink mx-4 text-sm text-gray-500 ">O inicia sesión con</span>
                <div class="flex-grow border-t border-gray-300 "></div>
            </div>
            <div class="flex items-center justify-center gap-4">
                <button class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-300  bg-white  hover:bg-gray-100  transition-colors" type="button">
                    <img alt="Google logo" class="h-6 w-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsGC_Dj4mPtE9l06npJZr7svfZH8-adwOqa6h7TbZJ8m-RL1ZGklD_hKk-A9h_nrv8l296P0C1wluuPymGz10e5-MzWlcvXahk5hAukz_-GfyhCevBDHqK8m3GiJiGUMEFxy8RLbtSdyMcac3Qi3cAVsPzU0rkYGxwmQ_BSLZaZRAzwkMmEkIxEnqYGJ7qB6a345c-AWB1HocGIkOQR48-nFeSX7vr5T_FNpNwyC8gLQA-nK7t1qOmbcQISKywXWiOmrQScthqTImD" />
                </button>
                <button class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-300  bg-white  hover:bg-gray-100  transition-colors" type="button">
                    <img alt="Apple logo" class="h-6 w-6 " src="https://lh3.googleusercontent.com/aida-public/AB6AXuApG-1NoWKIKcB5U5RYNRJz9Fo0OxbmpsEdF3JMsI6bP2s5KJtPqcTHFCdIpYrLht6MweneRvMGzF2EgAAAH0hCJb9xtjof00afigyWsLXXqMjLK4Ru0ABFJriFMWsIw0OPjLTDegMMgSvAqofolLyHJzYy-x2ERSJiCSSg4ba9lwQbKsdqmsRgZk5mOzO3XI5DH26IeOzTSMN0gJxLJwmOy2rFkp97kTg5-UJ_TouXMEjMfpQDHgxlG7JAaE087tENHQ99OzWGyUae" />
                </button>
                <button class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-300  bg-white  hover:bg-gray-100  transition-colors" type="button">
                    <img alt="Facebook logo" class="h-6 w-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqniuETNnXGj85-2T0ND6em1RquZGWwOpotCiwmYcmhz6kCFJn_9hjGjLm7r4Vf0Rbntibn3X6HKYzAIU4NBDG3csUG1zF76bhSH-T5Otz9YkI9ZBcfyLsgTset-rYRC65C5pblyPsvm9-TtNqSWkHFOuj7UbZW5sbd8yHMswUSrQ-7Kuq6clJoeH_GaOTVVei0h-t9sR7rD4CmjIqKkjg07t4AVI50wEjh5TPueHz0OkMB6yb9bJY-WlSsTvs-EuGI4ufCvbGrkLC" />
                </button>
            </div>
        </form>
        <p class="text-center text-gray-600 ">¿No tienes cuenta? <a class="font-bold text-primary hover:underline" href="#">Regístrate</a></p>
    </div>
</div>