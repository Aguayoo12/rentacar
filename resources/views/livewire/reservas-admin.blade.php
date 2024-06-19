<div class="p-4 max-w-7xl mx-auto">
    @if (session('status'))
        <x-alerta>{{ session('status') }}</x-alerta>
    @endif
<div class="relative overflow-x-auto sm:rounded-lg">
    <div class="flex items-center justify-end flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-gray-50">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input wire:model.live='search' type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-white focus:ring-red-500 focus:border-red-500" placeholder="Buscar...">
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Usuario
                </th>
                <th scope="col" class="px-6 py-3">
                    Vehículo
                </th>
                <th scope="col" class="px-6 py-3">
                    Ciudad
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha Recogida
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha Entrega
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                    @if ($reserva->photo != null)
                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/'.$reserva->photo) }}" alt="Jese image">
                    @else
                    <img class="w-10 h-10 rounded-full" src="{{ $this->getImage($reserva->user_id) }}" alt="Jese image">
                    @endif
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{$reserva->user_name}} {{$reserva->user_surname}}</div>
                        <div class="font-normal text-gray-500">{{$reserva->email}}</div>
                    </div>  
                </th>
                <td class=" px-6 py-4 text-gray-900">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{$reserva->car_name}}</div>
                        <div class="font-normal text-gray-500">{{$reserva->brand_name}}</div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    {{$reserva->car_city}}
                </td>
                <td class="px-6 py-4">
                    {{$reserva->fisrtDafte}}
                </td>
                <td class="px-6 py-4">
                    {{$reserva->lastDafte}}
                </td>
                <td class="px-6 py-4">
                    @if ($reserva->lastDafte <= $now)
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Finalizado
                    </div>
                    @elseif ($reserva->fisrtDafte > $now)
                        <a href="#" wire:click="openModal({{$reserva->user_id}}, {{$reserva->car_id}}, '{{$reserva->fisrtDafte}}', '{{$reserva->lastDafte}}')" type="button" class="font-medium text-white bg-red-500 p-2 rounded">Cancelar</a>    
                    @else
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 me-2"></div> En proceso
                    </div>
                    @endif
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
                    <button wire:click="delete"  type="button" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Si, Estoy seguro
                    </button>
                    <button wire:click="closeModal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancelar</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

</div>
