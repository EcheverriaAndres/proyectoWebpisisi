<header class="bg-white relative">
    <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div>
            <img class="w-16 cursor-pointer" src="https://puertopisisi.com/wp-content/uploads/2016/05/logo-2.png" alt="...">
        </div>
        <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
           
        </div>
        <div class="mx-4 space-x-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                <a class="btn btn-secondary btn-sm" href="{{ route('register') }}">Registrar</a>
            </button>

            <div class="relative inline-block text-left">
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded inline-flex items-center" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">
                    Ingresar
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="dropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-50">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="dropdownMenuButton">
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Iniciar sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        }

        // Cierra el dropdown si se hace clic fuera de él
        window.onclick = function(event) {
            if (!event.target.matches('#dropdownMenuButton') && !event.target.closest('#dropdownMenu')) {
                const dropdowns = document.querySelectorAll('#dropdownMenu');
                dropdowns.forEach(function(dropdown) {
                    if (!dropdown.classList.contains('hidden')) {
                        dropdown.classList.add('hidden');
                    }
                });
            }
        }
    </script>
</header>
