<div>
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-4">
            <img src="{{ asset('storage/'.$car->image) }}" alt="" class="w-full rounded-lg shadow-md">
            <div class="flex flex-col rounded-lg mt-10 bg-white shadow-md">
                <h2 class="text-xl font-semibold text-white bg-black rounded-tl-lg rounded-tr-lg p-2 ps-6 ">Especificaciones</h2>
                <div class="p-2">
                    <div class="flex flex-col">
                        <div class="text-gray-600 text-xl flex flex-row justify-around">
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-manual-gearbox"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 8l0 8" /><path d="M12 8l0 8" /><path d="M19 8v2a2 2 0 0 1 -2 2h-12" /></svg>
                                <span>{{ $car->transmission }}</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                                <span>{{ $car->seats }} personas</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-engine"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 10v6" /><path d="M12 5v3" /><path d="M10 5h4" /><path d="M5 13h-2" /><path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z" /></svg>
                                <span>{{ $car->power }}cv</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-gas-station"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3" /><path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14" /><path d="M3 20l12 0" /><path d="M18 7v1a1 1 0 0 0 1 1h1" /><path d="M4 11l10 0" /></svg>
                                <span>{{ $car->fuel }}</span>
                            </div>
                        </div>
                        <div class="flex flex-row text-gray-600 text-xl justify-around mt-2">
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                <span>{{ $car->city }}</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-car-garage"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M15 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M5 20h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" /><path d="M3 6l9 -4l9 4" /></svg>         
                                <span>{{ $car->brand->name }}</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M13.45 11.55l2.05 -2.05" /><path d="M6.4 20a9 9 0 1 1 11.2 0z" /></svg>
                                <span>{{ $car->km }}km</span>
                            </div>
                            <div class="flex">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-car"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" /></svg>
                                <span>{{ $car->type }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col rounded-lg mt-10 bg-white shadow-md">
                <h2 class="text-xl font-semibold text-white bg-black rounded-tl-lg rounded-tr-lg p-2 ps-6">Descripción</h2>
                <p class="p-2 ps-6 text-gray-500">{{ $car->description }}</p>
            </div>
        </div>
        <div class="col-span-2">
            <div class="flex flex-col rounded-lg bg-white shadow-md">
                <h2 class="text-xl font-semibold text-white bg-black rounded-tl-lg rounded-tr-lg p-2 ps-6">Fechas</h2>
                <div class="flex flex-col text-center p-2">
                    <div class=" text-gray-700">
                            {{ $initDate }}
                    </div>
                    <div class="p-2">
                        <span class="text-white text-md bg-black p-1 rounded-lg">hasta</span>
                    </div>
                    <div class=" text-gray-700">
                            {{ $endDate }}
                    </div>
                </div>
            </div>
            <div class="text-center mt-2 text-gray-600">Alquilado por {{$differenceInDays}} días</div>
            <div class="flex flex-col mt-8 rounded-lg bg-white shadow-md">
                <h2 class="text-xl font-semibold text-white bg-black rounded-tl-lg rounded-tr-lg p-2 ps-6">Resumen total</h2>
                <div class="flex flex-col p-4 text-gray-700">
                    <div class="flex justify-between mb-2">
                        <span>Precio de Alquiler (x{{$differenceInDays}}): </span><span>{{ ($car->price) * $differenceInDays }}€</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Seguro de Alquiler: </span><span>180€</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Fianza: </span><span>{{ $car->price }}€</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex text-gray-900 font-semibold text-xl justify-between mb-2">
                        <span>Total: </span><span>{{180 + $car->price * $differenceInDays + $car->price}} €</span>
                    </div>
                    <div class="flex">
                        <button wire:click="mostrarModal" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Alquilar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($showModal)
    <div class="fixed inset-0 flex justify-center bg-black bg-opacity-50 z-50 ">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <section id="card_container" style="transform-style: preserve-3d;"
            class="rotate-y-45 relative w-full max-w-sm mx-auto h-52">
            <div id="card_front" style="backface-visibility: hidden;"
              class="flex flex-col items-start p-5  justify-center text-white h-52 rounded-xl w-full max-w-sm bg-white shadow-lg mx-auto bg-[url('{{ asset('storage/img/bg_3.jpg') }}')]">
              <div class="w-full flex justify-between">
                <img class="w-10" src="{{ asset('storage/img/chipTarjeta.png') }}" alt="">
                <img class="w-20 object-contain" src="{{ asset('storage/img/visa.png') }}" alt="">
              </div>
              <div class="flex flex-col mt-4 mb-4">
                <span class="text-xs">Número de Tarjeta</span>
                <span id="card_number_text" class="text-white">
                  @if ($numeroTarjeta)
                    {{ $numeroTarjeta }}
                  @else
                    #### #### #### ####
                  @endif
                </span>
              </div>
              <div class="w-full flex justify-between">
                <div>
                  <span class="text-xs ">Nombre Tarjeta</span>
                  <p class="italic break-all" id="card_name_text">@if ($nombreTitular)
                    {{ $nombreTitular }}
                  @else
                    Nombre del Titular
                  @endif </p>
                </div>

                <div>
                  <span class="text-xs ">CVV</span>
                  <p class="italic break-all" id="card_name_text">@if ($cvv)
                    {{ $cvv }}
                  @else
                    123
                  @endif</p>
                </div>
      
                <div>
                  <div class="w-20">
                    <label for="exp" class="text-xs">Válido hasta</label>
                    <p><span id="month_text">@if ($expirationMonth)
                      {{ $expirationMonth }}
                    @else
                      00
                    @endif</span> / <span id="year_text">@if ($expirationYear)
                      {{ $expirationYear }}
                    @else
                      00
                    @endif</span></p>
                  </div>
                </div>
              </div>
            </div>
          <div class="w-full max-w-xs mx-auto">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Número de tarjeta
                </label>
                <input wire:model.live="numeroTarjeta"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="card_number" type="number" placeholder="#### #### #### ####">
                  @error('numeroTarjeta')
                    <div class="text-red-500">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="card_name">
                  Nombre Tarjeta
                </label>
                <input wire:model.live="nombreTitular"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                  id="card_name" type="text" placeholder="">
                  @error('nombreTitular')
                    <div class="text-red-500">{{ $message }}</div>
                  @enderror
              </div>
      
              <div class="mb-6 flex items-center justify-between">
                <div>
                  <select wire:model.live="expirationMonth" id="month" class="p-2 outline outline-slate-200 outline-1 border-white border-r-8" name="" id="">
                    <option value="">Mes</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  @error('expirationMonth')
                      <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                  <select wire:model.live="expirationYear" id="year" class="p-2 outline outline-slate-200 outline-1 border-white border-r-8" name="" id="">
                    <option value="">Año</option>
                    <option value="23">2023</option>
                    <option value="24">2024</option>
                    <option value="25">2025</option>
                    <option value="26">2026</option>
                    <option value="27">2027</option>
                    <option value="28">2028</option>
                    <option value="28">2029</option>
                    <option value="28">2030</option>
                    <option value="28">2031</option>
                  </select>
                  @error('expirationYear')
                      <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                  <input wire:model.live='cvv' id="cvv" type="text" placeholder="CVV" class="block shadow w-20 border rounded p-2">
                  @error('cvv')
                    <div class="text-red-500">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="flex items-center justify-between">
                <button class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-2 px-4 rounded" type="button" wire:click="rent">
                  Alquilar
                </button>
                <button wire:click='closeModal' class="w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" type="button">
                    Cancelar
                  </button>
              </div>
            </form>
          </div>
        </div>
    </div>
    @endif
</div>
