<div class="grid grid-cols-6 gap-4">
    <div class="col-span-2">
        <div class="shadow p-4 overflow-hidden sm:rounded-lg bg-white"> 
            <h1 class="text-2xl font-semibold text-black">Filtros</h1>
            <hr class="my-2">
            <h2 class="text-xl text-black mb-2">Potencia</h2>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-700">Desde</label>
                <div class="relative flex items-center w-2/5">
                    <input wire:model="minPower" type="text" id="minPower" data-input-counter data-input-counter-min="1" data-input-counter-max="999" aria-describedby="helper-text-explanation" class="bg-gray-50 border-gray-400 rounded-md h-11 font-medium text-center text-gray-900 text-sm focus:ring-red-500 focus:border-red-500 block w-full pb-6" placeholder=""/>
                    <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-engine"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 10v6" /><path d="M12 5v3" /><path d="M10 5h4" /><path d="M5 13h-2" /><path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z" /></svg>
                        <span>cv</span>
                    </div>
                    </button>
                </div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-700">Hasta</label>
                <div class="relative flex items-center w-2/5">
                    <input  wire:model="maxPower" type="text" id="bedrooms-input" data-input-counter data-input-counter-min="{{$minPower}}" data-input-counter-max="999" aria-describedby="helper-text-explanation" class="bg-gray-50 border-gray-400 rounded-md h-11 font-medium text-center text-gray-900 text-sm focus:ring-red-500 focus:border-red-500 block w-full pb-6" placeholder=""/>
                    <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-engine"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 10v6" /><path d="M12 5v3" /><path d="M10 5h4" /><path d="M5 13h-2" /><path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z" /></svg>
                        <span>cv</span>
                    </div>
                    </button>
                </div>
            </div>
            <hr class="my-2">
            <h2 class="text-xl text-black mb-2">Precio por Día</h2>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-700">Desde</label>
                <div class="relative flex items-center w-2/5">
                    <input wire:model="minPrice" type="text" id="minPower" data-input-counter data-input-counter-min="1" data-input-counter-max="9999" aria-describedby="helper-text-explanation" class="bg-gray-50 border-gray-400 rounded-md h-11 font-medium text-center text-gray-900 text-sm focus:ring-red-500 focus:border-red-500 block w-full pb-6" placeholder=""/>
                    <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                        <span>Euros</span>
                    </div>
                    </button>
                </div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-700">Hasta</label>
                <div class="relative flex items-center w-2/5">
                    <input  wire:model="maxPrice" type="text" id="bedrooms-input" data-input-counter data-input-counter-min="{{$minPrice}}" data-input-counter-max="9999" aria-describedby="helper-text-explanation" class="bg-gray-50 border-gray-400 rounded-md h-11 font-medium text-center text-gray-900 text-sm focus:ring-red-500 focus:border-red-500 block w-full pb-6" placeholder=""/>
                    <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                        <span>Euros</span>
                    </div>
                    </button>
                </div>
            </div>
            <hr class="my-2">
            <h2 class="text-xl text-black mb-2">Cambio</h2>
            <input id="automatico" value="automatico" type="checkbox" wire:model="transmissions" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2">
            <label for="automatico"  class="ms-2 text-sm text-gray-700">Automático</label><br>
            <input id="manual" value="manual" type="checkbox" wire:model="transmissions" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2">
            <label for="manual"  class="ms-2 text-sm text-gray-700">Manual</label>
            <hr class="my-2">
            <h2 class="text-xl text-black mb-2">Tipo</h2>
            <div class="mt-2">
                @foreach(['sedan' => 'Sedán', 'suv' => 'SUV', 'coupe' => 'Coupe', 'monovolumen' => 'Monovolumen', 'pickup' => 'Pickup', 'descapotable' => 'Descapotable', 'deportivo' => 'Deportivo'] as $value => $label)
                    <input type="checkbox" wire:model="types" value="{{ $value }}" id="type-{{ $value }}" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2">
                    <label for="type-{{ $value }}" class="ms-2 text-sm text-gray-700">{{ $label }}</label><br>
                @endforeach
            </div>

            <hr class="my-2">
            <h2 class="text-xl text-black mb-2">Combustible</h2>
            <div class="mt-2">
                @foreach(['gasolina' => 'Gasolina', 'diesel' => 'Diesel', 'electrico' => 'Electrico', 'hibrido' => 'Híbrido', 'gas-glp' => 'Gas GLP'] as $value => $label)
                    <input type="checkbox" wire:model="fuels" value="{{ $value }}" id="fuel-{{ $value }}" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2">
                    <label for="fuel-{{ $value }}" class="ms-2 text-sm text-gray-700">{{ $label }}</label><br>
                @endforeach
            </div>

            <div class="flex justify-end mt-2">
                <button class="text-white bg-gray-950 font-bold rounded p-2" wire:click='appliFilter'>Aplicar filtros</button>
            </div>
        </div>
    </div>
    <div class="col-span-4">
        @foreach ($cars as $car)
            <div class="shadow overflow-hidden sm:rounded-lg bg-white grid grid-cols-6 mb-4"> 
                <div class="col-span-2 p-2">
                    <img src="{{ asset('storage/'.$car->image) }}" alt="" class="w-72 h-32 rounded-lg">
                </div>
                <div class="col-span-4 flex flex-col p-2">
                    <h2 class="text-2xl font-semibold text-black">{{ $car->brand->name }} {{ $car->name }}</h2>
                    <div class="flex flex-row justify-between">
                        <p class="text-gray-700 text-sm">Tipo: {{ $car->type }}</p>
                        <p class="text-gray-400 text-md"><span class="text-red-500 text-2xl">{{ $car->price }}€</span>/Día</p>
                    </div>  
                    <hr class="my-2">
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <div class="text-gray-400 text-sm flex flex-row space-x-2">
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
                            </div>
                            <div class="flex flex-row text-gray-400 text-sm justify-between mt-1">
                                <div class="flex">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                    <span>{{ $car->city }} | {{ $car->km }} km</span>
                                </div>
                            </div>
                        </div>
                        <button class="text-white bg-gray-950 font-bold rounded p-2" wire:click="showCar({{ $car->id }})">Resérvalo</button>
                    </div>
                </div>
            </div>
        @endforeach
        @if ($this->isEmpty())
            <div class="text-center">No hay resultados, para los filtros aplicados.</div>
        @endif
    </div> 
</div>
