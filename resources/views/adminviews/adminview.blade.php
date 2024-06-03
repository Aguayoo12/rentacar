<x-app-layout>
    <div class="pt-20">
        <div class="max-w-7xl rounded-lg mx-auto py-10 sm:px-6 lg:px-8 bg-gray-200">
            <h2 class="text-3xl font-bold text-black">VISTA ADMINISTRADOR</h2>
        </div>
        <div class="max-w-7xl rounded-lg mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('admin-brands')
        </div>
        <div class="max-w-7xl rounded-lg mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('admin-cars')
        </div>
    </div>
</x-app-layout>