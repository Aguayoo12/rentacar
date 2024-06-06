<x-app-layout>
    <div class="relative bg-cover bg-no-repeat bg-center" style="background-image: url('{{asset('storage/img/banner.jpg')}}')">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="absolute inset-x-0 bottom-0">
            <div class="bg-red-600 h-4"></div>
        </div>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                <h1 class="font-sans text-4xl text-center font-bold tracking-tight text-white sm:text-5xl sm:leading-none merriweather-black-italic">{{$car->brand->name}} {{$car->name}}</h1>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto py-10 sm:px-6 lg:px-8">
        @livewire('view-car', ['car' => $car, 'initDate' => $initDate, 'endDate' => $endDate])
    </div>
        
</x-app-layout>