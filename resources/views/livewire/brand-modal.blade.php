<div>
    <button wire:click="openModal" class="flex items-center justify-center border border-gray-400 w-8 h-8 ml-2 text-white bg-gray-100 rounded-full hover:bg-gray-200">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#212121">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"/>
        </svg>
    </button>

    @if($isOpen)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div class="bg-white p-4 rounded-lg shadow-lg w-1/2">
                <button wire:click="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
                <form wire:submit.prevent="save">
                    <div>
                        <label for="name">Nombre Marca</label>
                        <input type="text" id="name" wire:model="name" required class="w-full p-2 border rounded">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="image">Imagen</label>
                        <div class="flex-1 items-center mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                            <div class="relative w-full">
                              <div class="items-center justify-center mx-auto">
                                <label class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none" id="drop"><span class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg><span class="font-medium text-gray-600">Arrastra y suelta la imagen, o<span class="text-red-500 underline ml-[4px]">buscar</span></span></span><input type="file" name="file_upload" class="hidden" accept="image/png,image/jpeg" id="image" wire:model="image" ></label>
                              </div>
                            </div>
                          </div>
                        @error('image') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    @if ($imagePreview)
                        <div class="mt-4">
                            <label>Vista Previa:</label>
                            <img src="{{ $imagePreview }}" class="w-32 h-32 rounded">
                        </div>
                    @elseif ($brand)
                        <div class="mt-4">
                            <label>Vista Previa:</label>
                            <img src="{{ asset('storage/'.$brand->logo) }}" class="w-32 h-32 rounded">
                        </div>
                    @endif
                    

                    <button type="submit" class="mt-4 p-2 bg-gray-700 : hover:bg-red-500 text-white rounded">
                        {{ $brandId ? 'Actualizar' : 'Guardar' }}
                    </button>
                </form>
            </div>
        </div>
    @endif
</div>

