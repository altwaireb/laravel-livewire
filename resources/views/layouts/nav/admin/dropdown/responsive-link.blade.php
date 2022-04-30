<!-- Account Management -->
<x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
    {{ __('app.Profile') }}
</x-jet-responsive-nav-link>

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