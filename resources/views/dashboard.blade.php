<x-app-layout>
    <div class="relative bg-cover bg-no-repeat bg-center" style="background-image: url('storage/img/banner.jpg')">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="absolute inset-x-0 bottom-0">
            <svg viewBox="0 0 224 12" fill="#ffffff" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                <path
                    d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                </path>
            </svg>
        </div>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-40">
            <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                <h1 class="mb-6 font-sans text-4xl text-center font-bold tracking-tight text-white sm:text-5xl sm:leading-none merriweather-black-italic">
                    RENTA<span class="rounded-md pe-2 text-white bg-red-500">CAR</span>   
                </h1>
                <p class="mb-6 text-base text-indigo-200 md:text-lg">
                    En esta página podrás encontrar las diferentes confradías de la Semana Santa andaluza, en las cuales puedes encontrar información detallada, para buscar mas detallamanete escriba el nombre.
                </p>
            </div>
        </div>
    </div>
    <div class="relative bg-white h-28 max-w-4xl mx-auto -mt-24 z-10 p-2 border border-gray-300 rounded-xl">
        <form>
            <div date-rangepicker class="flex items-center">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="start" type="text" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5 " placeholder="Selecciona fecha de inicio">
                </div>
                <span class="mx-4 text-gray-500">hasta</span>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="end" type="text" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5 " placeholder="Selecciona fecha de fin">
                </div>
            </div>
            <div class="mt-3 grid grid-cols-3 gap-2">
                <select id="countries" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 ">
                    <option selected>Cualquier ciudad</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
                <select id="countries" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 ">
                    <option selected>Numero de personas</option>
                    @for ($i = 0; $i < 8; $i++)
                        <option id="city-{{ $i }}" value="{{ $i }}">{{$i}}</option>
                    @endfor
                </select>
                <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    Buscar
                </button>
            </div>

        </form>

    </div>
</x-app-layout>
