
    <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(https://img.freepik.com/premium-photo/gaming-computer-hd-8k-wallpaper-background-stock-photographic-image_915071-21683.jpg);">
        <div class="absolute bg-gradient-to-b from-green-500 to-green-400 opacity-75 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            <div class="flex-col flex self-center p-10 sm:max-w-5xl xl:max-w-2xl z-10">
                <div class="self-start hidden lg:flex flex-col text-white">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 font-bold text-5xl">Registrar</h1>
                    <p class="pr-3"></p>
                </div>
            </div>
            <div class="flex justify-center self-center z-10">
                <form method="POST" action="{{ route('register') }}" class="p-12 bg-white mx-auto rounded-2xl w-100">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Contraseñas')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseñas')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('ya estas registrado ?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Registrar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
