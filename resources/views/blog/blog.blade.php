<x-app-layout>
    <div class="relative bg-cover bg-no-repeat bg-center" style="background-image: url('storage/img/banner.jpg')">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="absolute inset-x-0 bottom-0">
            <svg viewBox="0 0 224 12" fill="#f8fafc" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                <path
                    d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                </path>
            </svg>
        </div>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-40">
            <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                <h1 class="mb-6 font-sans text-4xl text-center font-bold tracking-tight text-white sm:text-5xl sm:leading-none merriweather-black-italic">
                    BLOG<span class="rounded-md pe-2 text-white bg-red-500">CAR</span>   
                </h1>
                <p class="mb-6 text-base text-indigo-200 md:text-lg">
                    En esta página podrás encontrar las diferentes confradías de la Semana Santa andaluza, en las cuales puedes encontrar información detallada, para buscar mas detallamanete escriba el nombre.
                </p>
            </div>
        </div>
    </div>
    @livewire('coment-blog', ['comments' => $comments])
</x-app-layout>