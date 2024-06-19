<div>
    @if (session('status'))
        <x-alerta>{{ session('status') }}</x-alerta>
    @endif
    <div class="relative bg-white max-w-4xl mx-auto -mt-24 z-10 py-4 px-6 border border-gray-300 rounded-xl">
        <h1 class="text-2xl font-semibold text-black">Agregar Reseña</h1>
            <textarea wire:model='comment' class="w-full p-2 border border-gray-300 rounded" placeholder="Escribe una reseña..."></textarea>
            <div class="flex">
                <div class="flex flex-col mt-2">
                    <label class="text-md font-medium text-gray-900">Valoración</label>
                    <div class="flex space-x-1">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg
                                wire:click="setRating({{ $i }})"
                                wire:mouseover="setHoverRating({{ $i }})"
                                wire:mouseleave="resetHoverRating"
                                class="w-6 h-6 cursor-pointer
                                    {{ $i <= $rating ? 'text-yellow-500' : 'text-gray-300' }}
                                    {{ $hoverRating >= $i && $hoverRating !== 0 ? 'text-yellow-400' : '' }}"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.356 4.175a1 1 0 00.95.69h4.309c.969 0 1.371 1.24.588 1.81l-3.49 2.54a1 1 0 00-.364 1.118l1.356 4.175c.3.921-.755 1.688-1.538 1.118l-3.49-2.54a1 1 0 00-1.175 0l-3.49 2.54c-.783.57-1.838-.197-1.538-1.118l1.356-4.175a1 1 0 00-.364-1.118L2.158 9.602c-.783-.57-.38-1.81.588-1.81h4.309a1 1 0 00.95-.69l1.356-4.175z"></path>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between mt-4">
                <div class="relative h-16">
                    <label title="Click to upload" for="button2" class="cursor-pointer flex items-center gap-4 px-6 py-2 before:border-gray-400/60 hover:before:border-gray-300 group before:bg-gray-100 before:absolute before:inset-0 before:rounded-3xl before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                    <div class="w-max relative">
                        <img class="w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="file upload icon" width="512" height="512">
                    </div>
                    <div class="relative">
                        <span class="block text-base font-semibold relative text-gray-700 group-hover:text-red-500">
                            Subir imagen
                        </span>
                    </div>
                    </label>
                    <input hidden="" type="file" name="button2" wire:model='image' accept="image/png,image/jpeg" id="button2">
                </div>
                @if ($this->image)
                    <img src="{{ $this->image->temporaryUrl() }}" class="w-72">
                @endif
            </div>
            <div class="flex justify-end mt-2">
                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" wire:click="submit">Subir Reseña</button>
            </div>
    </div>
    <div class="mt-10 bg-white max-w-4xl mx-auto rounded shadow">
        @foreach ($comments as $comment)
        <div
            class="mb-4 border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-row leading-normal">
            <img src="{{ asset('storage/'.$comment->image) }}" class="w-72">
            <div class="p-4 pt-2 flex flex-col justify-between leading-normal w-full">
                <div class="mb-8">
                    <div class="flex items-center justify-end">
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
                    <p class="text-gray-700 text-md">{{ $comment->comment }}</p>
                </div>
                <div class="flex justify-between">
                    <div class="flex">
                            <a
                            href="#">
                            @if (Auth::user()->profile_photo_path)
                                        <img src="{{ asset('storage/'.Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" class="w-10 h-10 rounded-full mr-4">
                                    @else
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="w-10 h-10 rounded-full mr-4">
                                    @endif</a>
                        <div class="text-sm">
                            <a href="#" class="text-gray-900 font-semibold leading-none hover:text-indigo-600">{{ $comment->user->name }} {{ $comment->user->surname }}</a>
                            <p class="text-gray-600">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="">
                        @if(Auth::user()->id == $comment->user_id || Auth::user()->role == 'admin')
                        <button class="bg-red-500 hover:bg-gray-900 text-white font-bold p-2 rounded" wire:click='delete({{ $comment->id }})'>
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                        </button>
                    @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
