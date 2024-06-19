@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm']) !!}>
