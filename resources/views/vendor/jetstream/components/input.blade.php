@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop']) !!}>
