@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-primary-400 text-sm font-medium leading-5 text-gray-900 dark:text-gray-200 focus:outline-none focus:border-primary-700 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 dark:hover:text-gray-100 hover:text-gray-700 hover:border-gray-300 dark:hover:border-gray-50 focus:outline-none focus:text-gray-700 dark:focus:text-gray-100 focus:border-gray-300 dark:focus:border-gray-600 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
