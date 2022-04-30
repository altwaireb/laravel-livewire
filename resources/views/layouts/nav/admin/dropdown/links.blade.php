<!-- Account Management -->
<div class="block px-4 py-2 text-xs text-gray-400">
    {{ __('app.Manage Account') }}
</div>

<x-jet-dropdown-link href="{{ route('profile.show') }}">
    {{ __('app.Profile') }}
</x-jet-dropdown-link>


<div class="border-t border-gray-100 dark:border-gray-500"></div>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-jet-dropdown-link
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); this.closest('form').submit();" role="button"
    >
        {{ __('app.Log Out') }}
    </x-jet-dropdown-link>
</form>