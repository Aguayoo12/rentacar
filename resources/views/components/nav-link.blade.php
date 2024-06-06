@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 my-4 rounded border border-transparent bg-red-500 text-sm font-medium leading-5 text-gray-50 focus:outline-none focus:text-gray-700 focus:bg-gray-300 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-3 my-4 rounded border border-transparent text-sm font-medium leading-5 text-gray-50 hover:bg-red-400 focus:outline-none focus:text-gray-700 focus:border-gray-300 focus:bg-gray-100 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
