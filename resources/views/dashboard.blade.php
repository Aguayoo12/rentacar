<x-app-layout>
    <div class="relative bg-cover bg-no-repeat bg-center" style="background-image: url('storage/img/banner.jpg')">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="absolute inset-x-0 bottom-0">
            <svg viewBox="0 0 224 12" fill="#f8fafc" class="w-full -mb-1 text-white" preserveAspectRatio="none">
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
                    Encontrar el coche perfecto para tu próximo viaje es fácil con nosotros. Nuestra amplia selección de vehículos y opciones de alquiler flexibles te permiten reservar con total confianza. ¡Haz tu reserva hoy mismo y comienza a disfrutar de la libertad de la carretera con RentaCar!
                </p>
            </div>
        </div>
    </div>
    @livewire('filter-form')
    <div class="p-2 mt-12">
        <div class="grid grid-cols-6 gap-x-4">
            <div class="col-span-2 relative">
                <div class="w-full bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('storage/img/coche1.jpeg');">
                    <!-- Overlay rojo -->
                    <div class="absolute inset-0 bg-red-500 opacity-90"></div>
                    <!-- Contenido del texto -->
                    <div class="relative z-10 p-16 ps-24 text-white">
                        <h2 class="text-3xl merriweather-black-italic">¿Por Qué Elegirnos?</h2>
                        <hr class="w-16 my-4">
                        <p class="text-sm">En RentaCar, nos enorgullecemos de ofrecer un servicio de alquiler de coches excepcional adaptado a tus necesidades. Aquí te mostramos por qué deberías elegirnos:</p>
                        <div class="grid grid-cols-2 text-sm mt-4 gap-2">
                            <div class="flex gap-2">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /><path d="M15 19l2 2l4 -4" /></svg>
                                <span>Servicio personalizado</span>
                            </div>
                            <div class="flex gap-2">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-hours-24"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 13c.325 2.532 1.881 4.781 4 6" /><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2" /><path d="M4 5v4h4" /><path d="M12 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" /><path d="M18 15v2a1 1 0 0 0 1 1h1" /><path d="M21 15v6" /></svg>
                                <span>Soporte 24/7</span>
                            </div>
                            <div class="flex gap-2">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-coin-euro"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M14.401 8c-.669 -.628 -1.5 -1 -2.401 -1c-2.21 0 -4 2.239 -4 5s1.79 5 4 5c.9 0 1.731 -.372 2.4 -1" /><path d="M7 10.5h4" /><path d="M7 13.5h4" /></svg>
                                <span>Mejor precio</span>
                            </div>
                            <div class="flex gap-2">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shield-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.46 20.846a12 12 0 0 1 -7.96 -14.846a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 -.09 7.06" /><path d="M15 19l2 2l4 -4" /></svg>
                                <span>Compañía segura</span>
                            </div>
                        </div>
                    </div>
                    <!-- Imagen del coche -->
                    <img src="storage/img/bmwm4.png" alt="Car" class="absolute w-full h-auto -mt-24 z-20">
                </div>
            </div>
            <div class="relative col-span-1">
                <div class="w-full bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('storage/img/m4.jpg');">
                    <!-- Overlay rojo -->
                    <div class="absolute inset-0 bg-gray-900 opacity-70"></div>
                    <!-- Contenido del texto -->
                    <div class="relative z-10 pt-80 text-white">
                        <h2 class="text-3xl merriweather-black-italic ms-4 mb-2">BMW</h2>
                    </div>
                </div>
            </div>
            <div class="relative col-span-1">
                <div class="w-full bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('storage/img/PORSCHE.avif');">
                    <!-- Overlay rojo -->
                    <div class="absolute inset-0 bg-gray-900 opacity-70"></div>
                    <!-- Contenido del texto -->
                    <div class="relative z-10 pt-80 text-white">
                        <h2 class="text-3xl merriweather-black-italic ms-4 mb-2">PORSCHE</h2>
                    </div>
                </div>
            </div>
            <div class="relative col-span-1">
                <div class="w-full bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('storage/img/audi.jpg');">
                    <!-- Overlay rojo -->
                    <div class="absolute inset-0 bg-gray-900 opacity-70"></div>
                    <!-- Contenido del texto -->
                    <div class="relative z-10 pt-80 text-white">
                        <h2 class="text-3xl merriweather-black-italic ms-4 mb-2">AUDI</h2>
                    </div>
                </div>
            </div>
            <div class="relative col-span-1">
                <div class="w-full bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('storage/img/mini.jpeg');">
                    <!-- Overlay rojo -->
                    <div class="absolute inset-0 bg-gray-900 opacity-70"></div>
                    <!-- Contenido del texto -->
                    <div class="relative z-10 pt-80 text-white">
                        <h2 class="text-3xl merriweather-black-italic ms-4 mb-2">MINI</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-10 mt-28">
        <h2 class="text-3xl merriweather-black-italic">NUESTROS <span class="text-red-500">VEHICULOS</span></h2>
        <div class="grid grid-cols-4">
            @foreach ($cars as $car)
            <div class="flex px-3 py-3">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/'.$car->image) }}" alt="" class="w-full h-44">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$car->brand->name}} {{$car->name}}</div>
                        <hr class="my-2">
                        <div class="text-gray-400 text-sm flex flex-wrap gap-x-3 gap-y-1">
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-manual-gearbox"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 8l0 8" /><path d="M12 8l0 8" /><path d="M19 8v2a2 2 0 0 1 -2 2h-12" /></svg>
                                <span>{{ $car->transmission }}</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                                <span>{{ $car->seats }} personas</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-engine"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 10v6" /><path d="M12 5v3" /><path d="M10 5h4" /><path d="M5 13h-2" /><path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z" /></svg>
                                <span>{{ $car->power }}cv</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-gas-station"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3" /><path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14" /><path d="M3 20l12 0" /><path d="M18 7v1a1 1 0 0 0 1 1h1" /><path d="M4 11l10 0" /></svg>
                                <span>{{ $car->fuel }}</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                <span>{{ $car->city }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-2 flex justify-between">
                        <p class="text-gray-400 text-md"><span class="text-red-500 text-2xl">{{ $car->price }}€</span>/Día</p>
                        <button class="text-white bg-gray-950 font-bold rounded p-2">
                            <a href="{{ route('cars.show', ['car' => $car->id]) }}">Resérvalo</a>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div>
    <section id="works" class="relative bg-red-500 py-12">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-4xl text-white font-extrabold mx-auto md:text-6xl lg:text-5xl">¿Cómo funciona?</h2>
                <p class="max-w-2xl mx-auto mt-4 text-base text-gray-100 leading-relaxed md:text-2xl">
                    Una solución de alquiler de vehiculos en pocos pasos
                </p>
            </div>
            <div class="relative mt-12 lg:mt-20">
                <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28"><img alt="" loading="lazy" width="1000" height="500" decoding="async" data-nimg="1" class="w-full" style="color:transparent" src="https://cdn.rareblocks.xyz/collection/celebration/images/steps/2/curved-dotted-line.svg">
                </div>
                <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">
                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700">1</span>
                        </div>
                        <h3 class="mt-6 text-xl  text-white font-semibold leading-tight md:mt-10">Introduce Fechas</h3>
                        <p class="mt-4 text-base text-gray-100 md:text-lg">
                            Introduce las fechas que quieres el vehículo así como la ciudad o los pasajeros que vais a viajar.
                        </p>
                    </div>
                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700">2</span>
                        </div>
                        <h3 class="mt-6 text-xl text-white font-semibold leading-tight md:mt-10">Escoge el Adecuado</h3>
                        <p class="mt-4 text-base text-gray-100 md:text-lg">
                            Elige el vehículo que mejor se adapte a tus condiciones, podiendo aplicar filtros.
                        </p>
                    </div>
                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700">3</span>
                        </div>
                        <h3 class="mt-6 text-xl text-white font-semibold leading-tight md:mt-10">Reserva</h3>
                        <p class="mt-4 text-base text-gray-100 md:text-lg">
                            Con un simple click, reserva el vehiculo escogido rellenando un pequeño formulario para el pago.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 m-auto max-w-xs h-[357px] blur-[118px] sm:max-w-md md:max-w-lg"
            style="background:radial-gradient(1.89deg, rgba(34, 78, 95, 0.4) -1000%, rgba(191, 227, 205, 0.26) 1500.74%, rgba(34, 140, 165, 0.41) 56.49%, rgba(28, 47, 99, 0.11) 1150.91%)">
        </div>
    </section>
</div>
<div class="bg-gray-200 pb-8">
    <div class="max-w-7xl mx-auto px-8 pt-6">
        <h2 class="text-3xl merriweather-black-italic">OPINIONES DE <span class="text-red-500">CLIENTES</span></h2>
        <div class="grid grid-cols-4 mt-2 gap-4">
            @foreach ($comments as $comment)
                <div
                class="rounded overflow-hidden shadow-lg bg-gray-50">
                    <div class="py-4 px-8">
                        <div class="flex flex-row gap-x-6">
                            <img src="{{ $comment->user->profile_photo_url }}" class="rounded-full h-12 w-12 mb-4">
                            <div>
                                <p class="text-lg font-bold">{{$comment->user->name}}</p>
                                <p class="text-sm text-gray-600">{{$comment->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                        <div class="flex flex-row mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                            @if($i <= $comment->rating)
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            @else
                                <svg class="w-4 h-4 text-gray-300 dark:text-gray-500 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            @endif
                        @endfor
                        </div>
                        <p class="mb-2 text-sm text-gray-600">"{{$comment->comment}}"</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="bg-gray-100">
    <div class="py-10 max-w-screen-lg mx-auto">
        <div class="text-center mb-10">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                EL EQUIPO
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Nuestro<span class="text-red-600"> Equipo</span>
            </h3>
        </div>


        <div class="grid grid-cols-3 col-gap-10">

            <div class="text-center bg-white">
                <img class="w-100" src="https://media.gq.com.mx/photos/603fab8b94037dd0571a3fe4/master/w_1600%2Cc_limit/empresas-1248192110.jpg">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#"
                            class="hover:text-red-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Antonio Jesús Aguayo</a>
                        <p class="text-gray-500 uppercase text-sm">Web developer</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <a href="#">

                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <g data-name="Layer 2">
                                    <g data-name="facebook">
                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                        <path
                                            d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z">
                                        </path>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#">
                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                xml:space="preserve">
                                <g id="XMLID_826_">
                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
                                </g>
                            </svg></a>

                        <a href="#">
                            <svg width="19px" height="19px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;"
                                xml:space="preserve">
                                <g>
                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872
		c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118
		c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251
		c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z"></path>
                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438
		c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957
		c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z"></path>
                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654
		c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z"></path>
                                    <path style="fill:#FFFFFF;"
                                        d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185
		c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z"></path>
                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814
		C93.282,101.457,89.661,116.261,93.282,126.483z"></path>
                                </g>
                            </svg></a>


                    </div>
                </div>

            </div>
            <div class="text-center bg-white">
                <img class="w-100" src="https://images.pexels.com/photos/2897883/pexels-photo-2897883.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#"
                            class="hover:text-red-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Angel Aguayo</a>
                        <p class="text-gray-500 uppercase text-sm">PRESIDENTE &amp; CEO</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <a href="#">

                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <g data-name="Layer 2">
                                    <g data-name="facebook">
                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                        <path
                                            d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z">
                                        </path>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#">
                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                xml:space="preserve">
                                <g id="XMLID_826_">
                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
                                </g>
                            </svg></a>

                        <a href="#">
                            <svg width="19px" height="19px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;"
                                xml:space="preserve">
                                <g>
                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872
		c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118
		c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251
		c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z"></path>
                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438
		c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957
		c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z"></path>
                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654
		c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z"></path>
                                    <path style="fill:#FFFFFF;"
                                        d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185
		c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z"></path>
                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814
		C93.282,101.457,89.661,116.261,93.282,126.483z"></path>
                                </g>
                            </svg></a>


                    </div>
                </div>

            </div>
            <div class="text-center bg-white">
                <img class="w-100" src="https://images.pexels.com/photos/3778680/pexels-photo-3778680.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#"
                            class="hover:text-red-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Lorenzo Castro</a>
                        <p class="text-gray-500 uppercase text-sm">Web designer</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <a href="#">

                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <g data-name="Layer 2">
                                    <g data-name="facebook">
                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                        <path
                                            d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z">
                                        </path>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#">
                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                xml:space="preserve">
                                <g id="XMLID_826_">
                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
                                </g>
                            </svg></a>

                        <a href="#">
                            <svg width="19px" height="19px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;"
                                xml:space="preserve">
                                <g>
                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872
		c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118
		c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251
		c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z"></path>
                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438
		c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957
		c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z"></path>
                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654
		c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z"></path>
                                    <path style="fill:#FFFFFF;"
                                        d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185
		c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z"></path>
                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814
		C93.282,101.457,89.661,116.261,93.282,126.483z"></path>
                                </g>
                            </svg></a>


                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
</x-app-layout>
