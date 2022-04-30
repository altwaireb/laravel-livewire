<div class="pt-2 pb-3 space-y-1">
    <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-jet-responsive-nav-link>
</div>
