<x-app-layout>
    <div class="relative bg-cover bg-no-repeat bg-center" style="background-image: url('{{asset('storage/img/banner.jpg')}}')">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="absolute inset-x-0 bottom-0">
            <div class="bg-red-600 h-4"></div>
        </div>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-24">
            <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto my-6">
        <div class="grid grid-cols-12 gap-x-8">
            <div class="my-auto col-span-7">
                <h1 class="text-3xl font-semibold text-black">Registrarse</h1>
                <p class="text-gray-500">Registrar una cuenta nueva.</p>
                <x-validation-errors class="mb-4" />
                <div class="mt-8">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-x-4">
                            
                        <div class="col-span-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo Electrónico</label>
                            <div class="relative mb-4">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                                    </svg>
                                </div>
                                <input type="email" id="email"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5 " placeholder="name@gmail.com" name="email" :value="old('email')" required autofocus autocomplete="username">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Juan" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="mb-4">
                            <label for="surname" class="block mb-2 text-sm font-medium text-gray-900">Apellidos</label>
                            <input type="text" id="surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Garcia" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Número de Teléfono</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                        <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                                    </svg>
                                </div>
                                <input type="text" id="phone" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5 " pattern="[0-9]{9}" placeholder="612345678" name="phone" :value="old('phone')" required autofocus autocomplete="phone"  />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="dni" class="block mb-2 text-sm font-medium text-gray-900">DNI</label>
                            <input type="text" id="dni" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="12345678A" pattern="[0-9]{8}[A-Z]" name="dni" :value="old('dni')" required autofocus autocomplete="dni" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="•••••••••" name="password" required autocomplete="current-password" />
                        </div> 
                        <div class="mb-4">
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                            <input type="password" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="•••••••••" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="w-full px-4 py-3 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300">Registrar Nueva Cuenta</button>
                        </div>
                        <p class="text-gray-500 mt-2">¿Ya tienes cuenta?, <a href="{{ route('login') }}" class="text-red-500">Inicia Sesión</a></p>
                    </form>
                </div>
            </div>
            <div class="col-span-5">
                <img src="{{asset('storage/img/login.jpg')}}" alt="" class="rounded-lg">
            </div>
        </div>
    </div>
        
</x-app-layout>