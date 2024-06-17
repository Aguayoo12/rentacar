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

    <div class="max-w-4xl mx-auto my-6">
        <div class="grid grid-cols-2 gap-x-8">
            <div class="my-auto">
                <h1 class="text-3xl font-semibold text-black">Iniciar Sesion</h1>
                <p class="text-gray-500">Inicia sesión para acceder a tu cuenta.</p>
                <x-validation-errors class="mb-4" />
                <div class="mt-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="•••••••••" name="password" required autocomplete="current-password" />
                        </div> 
                        <div class="block">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Recordar usuario') }}</span>
                            </label>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="w-full px-4 py-3 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300">Iniciar Sesion</button>
                        </div>
                        <p class="text-gray-500 mt-2">¿No tienes cuenta?, <a href="{{ route('register') }}" class="text-red-500">Registrate</a></p>
                    </form>
                </div>
            </div>
            <div>
                <img src="{{asset('storage/img/login1.jpg')}}" alt="" class="rounded-lg">
            </div>
        </div>
    </div>
        
</x-app-layout>
