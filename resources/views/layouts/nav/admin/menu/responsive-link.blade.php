<div class="pt-2 pb-3 space-y-1">
    <x-jet-responsive-nav-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')">
        {{ __('app.admin index') }}
    </x-jet-responsive-nav-link>

    <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('user.users') }}
    </x-jet-responsive-nav-link>
</div>

