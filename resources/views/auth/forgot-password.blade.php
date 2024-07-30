
    <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(https://images.unsplash.com/photo-1477579266593-ccd7841e4f02?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXRodW1ibmFpbHx8MzUxNjg4N3x8ZW58MHx8fHx8);">
        <div class="absolute bg-gradient-to-b from-green-500 to-green-400 opacity-75 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            <div class="flex-col flex self-center p-10 sm:max-w-5xl xl:max-w-2xl z-10">
                <div class="self-start hidden lg:flex flex-col text-white">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 font-bold text-5xl">Recuperar Contraseñas </h1>
                    <p class="pr-3"></p>
                </div>
            </div>
            <div class="flex justify-center self-center z-10">
                <form method="POST" action="{{ route('password.email') }}" class="p-12 bg-white mx-auto rounded-2xl w-100">
                    @csrf

                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('si tienes problemas con iniciar sesion puedes recuperar tu contraseñas ingresa tu correo electronico .') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __(' enviamos un Email con un  Link para modificar la Contraseñas') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

