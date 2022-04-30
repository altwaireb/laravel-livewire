<!-- Account Management -->
<x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
    {{ __('Profile') }}
</x-jet-responsive-nav-link>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}" x-data>
    @csrf

    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                               @click.prevent="$root.submit();">
        {{ __('Log Out') }}
    </x-jet-responsive-nav-link>
</form>