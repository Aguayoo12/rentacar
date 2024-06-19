<div>
    @if (session('status'))
        <x-alerta>{{ session('status') }}</x-alerta>
    @endif
    <div class="max-w-7xl mx-auto pt-10">
        <h2 class="text-3xl merriweather-black-italic">MIS RESERVAS<span class="text-red-500"> EN CURSO</span></h2>
        <div class="grid grid-cols-4">
            @foreach ($cars as $car)
            @if($car->pivot->fisrtDafte <= $now && $car->pivot->lastDafte > $now)
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
                        <div class="px-6 pb-2 flex justify-center">
                            <p class="text-gray-500 text-md flex flex-col">{{ $this->parseDate($car->pivot->fisrtDafte) }} <span class="text-red-500"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-down mx-auto my-1"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M8 12l4 4" /><path d="M12 8v8" /><path d="M16 12l-4 4" /></svg></span> {{ $this->parseDate($car->pivot->lastDafte) }}</p>
                        </div>
                        <div class="px-6 pb-2 flex justify-end">
                            <button class="text-white bg-yellow-400 font-bold rounded p-2" wire:click="setCarId1({{ $car->id }}, '{{ $car->pivot->fisrtDafte }}', '{{ $car->pivot->lastDafte }}')">
                                Hacer Devolucion
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-3xl merriweather-black-italic">MIS <span class="text-red-500">PROXIMAS</span> RESERVAS</h2>
        <div class="grid grid-cols-4">
            @foreach ($cars as $car)
            @if($car->pivot->fisrtDafte > $now)
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
                        <div class="px-6 pb-2 flex justify-center">
                            <p class="text-gray-500 text-md flex flex-col">{{ $this->parseDate($car->pivot->fisrtDafte) }} <span class="text-red-500"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-down mx-auto my-1"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M8 12l4 4" /><path d="M12 8v8" /><path d="M16 12l-4 4" /></svg></span> {{ $this->parseDate($car->pivot->lastDafte) }}</p>
                        </div>
                        <div class="px-6 pb-2 flex justify-end">
                            <button class="text-white bg-red-500 font-bold rounded p-2" wire:click="setCarId({{ $car->id }}, '{{ $car->pivot->fisrtDafte }}', '{{ $car->pivot->lastDafte }}')">
                                Cancelar
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
    <div class="max-w-7xl mx-auto pb-10">
        <h2 class="text-3xl merriweather-black-italic">MIS RESERVAS <span class="text-red-500"> ANTERIORES</span></h2>
        <div class="grid grid-cols-4">
            @foreach ($cars as $car)
            @if($car->pivot->lastDafte <= $now)
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
                        <div class="px-6 pb-2 flex justify-center">
                            <p class="text-gray-500 text-md flex flex-col">{{ $this->parseDate($car->pivot->fisrtDafte) }} <span class="text-red-500"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-down mx-auto my-1"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M8 12l4 4" /><path d="M12 8v8" /><path d="M16 12l-4 4" /></svg></span> {{ $this->parseDate($car->pivot->lastDafte) }}</p>
                        </div>
                        <div class="px-6 pb-2 flex justify-end">
                            <button class="text-white bg-gray-950 font-bold rounded p-2">
                                <a href="{{ route('comments.index') }}">Poner Reseña</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
    @if ($showModal)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" wire:click="closeModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-red-500 w-24 h-24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-2 text-lg font-normal text-gray-500">¿Estás seguro que quieres cancelar la reserva? </h3>
                    <p class="text-sm text-gray-400 mb-5 mx-12">La cancelación de la reserva implica la devolución del pago a excepción de la fianza</p>
                    <button wire:click="borrar"  type="button" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Si, Estoy seguro
                    </button>
                    <button wire:click="closeModal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancelar</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if ($showModal1)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" wire:click="closeModal1">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-yellow-400 w-24 h-24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-2 text-lg font-normal text-gray-500">¿Estás seguro que quieres devolver el vehículo? </h3>
                    <p class="text-sm text-gray-400 mb-5 mx-12">La devolución implica el cobro del pago por los días utilizados además del seguro y la fianza</p>
                    <button wire:click="delete"  type="button" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Si, Estoy seguro
                    </button>
                    <button wire:click="closeModal1" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancelar</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
