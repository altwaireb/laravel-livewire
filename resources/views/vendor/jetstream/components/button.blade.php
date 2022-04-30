{{--<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>--}}
{{--    {{ $slot }}--}}
{{--</button>--}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop']) }}>
    {{ $slot }}
</button>
