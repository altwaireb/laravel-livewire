<div class="hidden space-x-8 sm:-my-px ltr:sm:ml-10 rtl:sm:mr-10 sm:flex">
    <x-jet-nav-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')">
        {{ __('app.admin index') }}
    </x-jet-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px ltr:sm:ml-10 rtl:sm:mr-10 sm:flex">
    <x-jet-nav-link href="{{ route('admin.user.index') }}" :active="request()->routeIs('admin.user.index')">
        {{ __('user.users') }}
    </x-jet-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px ltr:sm:ml-10 rtl:sm:mr-10 sm:flex">
    <x-jet-nav-link href="{{ route('admin.role.index') }}" :active="request()->routeIs('admin.role.index')">
        {{ __('role.roles') }}
    </x-jet-nav-link>
</div>
