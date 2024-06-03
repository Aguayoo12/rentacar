<div>
    <div class="grid grid-cols-2">
        <h2 class="text-3xl font-bold text-black mb-2">Marcas</h2>
        <div class="justify-item-end flex flex-row-reverse">
            <livewire:brand-modal />

            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-500 focus:border-red-500 " placeholder="Buscar marcas" required />
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre Marca</th>
                    <th scope="col" class="px-6 py-3 text-center">Imagen</th>
                    <th scope="col" class="px-6 py-3 text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr class="odd:bg-white even:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $brand->name }}</th>
                    <td class="px-6 py-4"><img src="{{ asset('storage/'.$brand->logo) }}" alt="{{ $brand->name }}" class="mx-auto w-10 h-10"></td>
                    <td class="px-6 py-4 text-end">
                        <button class="font-medium text-gray-900 border border-gray-900 px-2 py-1 rounded hover:bg-gray-100" wire:click="$dispatch('editBrand', { brandId: {{ $brand->id }} })">Editar</button>
                        <a href="#" class="font-medium text-white bg-red-500 hover:bg-red-600 px-2 py-1 mx-2 rounded">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
