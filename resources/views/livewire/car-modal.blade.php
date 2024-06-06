<div>
    <button wire:click="openModal" class="flex items-center justify-center border border-gray-400 w-8 h-8 ml-2 text-white bg-gray-100 rounded-full hover:bg-gray-200">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#212121">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"/>
        </svg>
    </button>

    @if($isOpen)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="relative bg-white p-4 rounded-lg shadow-lg w-11/12 max-h-full overflow-y-auto lg:w-1/2">
            <button wire:click="closeModal" class="absolute top-2 left-2 text-gray-500 hover:text-gray-700">&times;</button>
            <form wire:submit.prevent="save" class="grid grid-cols-2 gap-4">
                <div class="mt-4">
                    <label for="name">Modelo del Coche</label>
                    <input type="text" id="name" wire:model="name" required class="w-full p-2 border rounded">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="seats">Asientos</label>
                    <select id="seats" wire:model="seats" required class="w-full p-2 border rounded">
                        <option>Seleccione un numero de Asientos</option>
                        @for ($i = 2; $i <= 9; $i++)
                            <option value="{{ $i }}">{{$i}}</option>
                        @endfor
                    </select>
                    @error('seats') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="transmission">Transmisión</label>
                    <select id="transmission" wire:model.live="transmission" required class="w-full p-2 border rounded">
                        <option>Seleccione una Transmisión</option>
                        <option value="manual">Manual</option>
                        <option value="automatico">Automatico</option>
                    </select>
                    @error('transmission') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="power">Potencia</label>
                    <input type="number" id="power" wire:model="power" required class="w-full p-2 border rounded">
                    @error('power') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="price">Precio</label>
                    <input type="number" step="0.01" id="price" wire:model="price" required class="w-full p-2 border rounded">
                    @error('price') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="km">Kilómetros</label>
                    <input type="number" step="0.01" id="km" wire:model="km" required class="w-full p-2 border rounded">
                    @error('km') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="type">Tipo</label>
                    <select id="type" wire:model="type" required class="w-full p-2 border rounded">
                        <option>Seleccione un tipo</option>
                        <option value="sedan">Sedán</option>
                        <option value="suv">SUV</option>
                        <option value="coupe">Coupe</option>
                        <option value="monovolumen">Monovolumen</option>
                        <option value="pickup">Pickup</option>
                        <option value="descapotable">Descapotable</option>
                        <option value="deportivo">Deportivo</option>
                    </select>
                    @error('type') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="fuel">Combustible</label>
                    <select id="fuel" wire:model="fuel" required class="w-full p-2 border rounded">
                        <option>Seleccione un Combustible</option>
                        <option value="gasolina">Gasolina</option>
                        <option value="diesel">Diesel</option>
                        <option value="electrico">Electrico</option>
                        <option value="hibrido">Híbrido</option>
                        <option value="gas-glp">Gas GLP</option>
                    </select>
                    @error('fuel') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="city">Ciudad</label>
                    <input type="text" id="city" wire:model="city" required class="w-full p-2 border rounded">
                    @error('city') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label for="brand_id">Marca</label>
                    <select id="brand_id" wire:model.live="brand_id" required class="w-full p-2 border rounded">
                        <option>Seleccione una Marca</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    @error('brand_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-2 col-span-2">
                    <label for="description">Descripcion</label>
                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Escribe la descripcion del vehiculo..." wire:model="description"></textarea>
                    @error('description') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <div class="relative">
                        <label title="Click to upload" for="button2" class="cursor-pointer flex items-center gap-4 px-6 py-2 before:border-gray-400/60 hover:before:border-gray-300 group before:bg-gray-100 before:absolute before:inset-0 before:rounded-3xl before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                        <div class="w-max relative">
                            <img class="w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="file upload icon" width="512" height="512">
                        </div>
                        <div class="relative">
                            <span class="block text-base font-semibold relative text-gray-700 group-hover:text-red-500">
                                Subir imagenes
                            </span>
                        </div>
                        </label>
                        <input hidden="" type="file" name="button2" wire:model='image' accept="image/png,image/jpeg" id="button2">
                    </div>
                    @error('images.*') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if ($imagePreview)
                    <div class="mt-4 col-span-2">
                        <label>Vista Previa:</label>
                        <div class="">                            
                            <img src="{{ $imagePreview }}" class="w-32 h-32 rounded">                        
                        </div>
                    </div>
                @elseif ($car)
                    <div class="mt-4 col-span-2">
                        <label>Vista Previa:</label>
                        <div class="">
                            <img src="{{ asset('storage/'.$car->image) }}" class="w-32 h-32 rounded">                        
                        </div>
                    </div>
                @endif
                
                <button type="submit" class="col-span-2 mt-4 p-2 bg-gray-700 hover:bg-red-500 text-white rounded">
                    {{ $carId ? 'Actualizar' : 'Guardar' }}
                </button>
            </form>
        </div>
    </div>
    
    @endif
</div>