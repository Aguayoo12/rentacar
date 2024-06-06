<div>
    <div class="relative bg-white h-28 max-w-4xl mx-auto -mt-24 z-10 p-2 border border-gray-300 rounded-xl">
        <form method="post" wire:submit='submit'>
            @csrf
            @method('POST')
            <div class="flex items-center">
                <div class="flex flex-col w-full">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input required wire:model="initDate" name="start" type="date" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5 " placeholder="Selecciona fecha de fin">
                    </div>
                </div>
                <span class="mx-4 text-gray-500">hasta</span>
                <div class="flex flex-col w-full">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input required wire:model="endDate" name="end" type="date" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5 " placeholder="Selecciona fecha de fin">
                    </div>
                </div>
            </div>
            <div class="mt-3 grid grid-cols-3 gap-2">
                <select id="city" wire:model="city" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 ">
                    <option selected>Cualquier ciudad</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->city }}">{{ $city->city }}</option>
                    @endforeach
                </select>
                <div class="relative flex items-center">
                    <select id="city" wire:model="people" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 ">
                        <option selected>Numero de Personas</option>
                        @for ($i = 1; $i <= 9; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <button type="submit" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    Buscar
                </button>
            </div>
        </form>
    </div>
</div>