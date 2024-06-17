<div class="p-4 max-w-7xl mx-auto">
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
                    @if ($reserva->lastDafte < $now)
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Finalizado
                    </div>
                    @elseif ($reserva->fisrtDafte > $now)
                        <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-white bg-red-500 p-2 rounded">Cancelar</a>    
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
    <!-- Edit user modal -->
    <div id="editUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Edit user
                    </h3>
                   <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="editUserModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    
                </div>
            </form>
        </div>
    </div>
</div>

</div>
