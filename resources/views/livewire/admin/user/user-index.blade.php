<div wire:init="loadItems">

    <div wire:loading class="w-full">
        <div class="flex justify-center items-center mt-32">
            <x-svg.svg-spinner class="w-24 h-24 fill-primary-700 dark:fill-primary-400"/>
        </div>
    </div>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 text-primary-700 dark:text-primary-400">
            {{ __('user.users') }}
        </h2>
    </x-slot>

    <div class="py-12" wire:loading.remove>
        <div class="pr-0 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-5 overflow-hidden text-gray-800 shadow-xl lg:px-0 sm:px-10 bg-gray-50 sm:rounded-lg lg:rounded-3xl dark:bg-gray-900 dark:text-gray-400">
                <div class="flex flex-wrap items-center">
                    <div class="relative flex-row flex-1 w-full max-w-full px-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300"> {{ __('user.users') }}</h3>
                            </div>
                            <div class="ml-4">
                                @can('create' , \App\Models\User::class)
                                    <x-jet-button wire:click="selectedItem('create',null)"
                                                  class="text-white rounded-lg dark:text-gray-300 bg-primary-600 dark:bg-primary-700 hover:bg-primary-700 focus:border-primary-900 focus:ring-primary-300">
                                        <x-svg.svg-plus class="w-5 h-5"/>
                                        {{ __('app.create') }}   {{ __('user.user') }}
                                    </x-jet-button>
                                @endcan
                            </div>
                        </div>

                        <div class="relative grid grid-cols-6 gap-6 mt-2 ">

                            <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                <x-jet-label class="text-xs" for="search" value="{{ __('app.search') }}"/>
                                <x-jet-input wire:model="term" id="search" type="text" class="block w-full mt-1"
                                             autocomplete="off"/>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-jet-label class="text-xs" for="select"
                                             value="{{ __('app.By') }} {{ __('role.role') }}"/>
                                <x-select wire:model="role" wire:key="roleTerm" class="mt-1">
                                    <option value="">{{ __('app.All') }} {{ __('role.roles') }}</option>
                                    @forelse($roles as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @empty
                                    @endforelse
                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-jet-label class="text-xs" for="select"
                                             value="{{ __('app.By') }} {{ __('country.country') }}"/>
                                <x-select wire:model="country" wire:key="countryTerm" class="mt-1">
                                    <option value="">{{ __('app.All') }} {{ __('country.countries') }}</option>
                                    @forelse($countries as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @empty
                                    @endforelse
                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-jet-label class="text-xs" for="select" value="{{ __('app.OrderBy') }}"/>
                                <x-select wire:model="orderBy" class="mt-1">
                                    <option value="id">{{ __('app.id') }}</option>
                                    <option value="name">{{ __('user.name') }}</option>
                                    <option value="username">{{ __('user.username') }}</option>
                                    <option value="email">{{ __('user.email') }}</option>
                                    <option value="role_id">{{ __('user.role') }}</option>
                                    <option value="country_id">{{ __('user.country') }}</option>
                                    @if($trashed)
                                        <option value="deleted_at">{{ __('app.deleted_at') }}</option>
                                    @else
                                        <option value="last_seen">{{ __('user.last_seen') }}</option>
                                        <option value="created_at">{{ __('app.created_at') }}</option>
                                        <option value="updated_at">{{ __('app.updated_at') }}</option>
                                    @endif

                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-jet-label class="text-xs" for="select" value="{{ __('app.PerPage') }}"/>
                                <x-select wire:model="perPage" class="mt-1">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-jet-label class="text-xs" for="select" value="{{ __('app.SortBy') }}"/>
                                <x-select wire:model="sortBy" class="mt-1">
                                    <option value="asc">{{ __('app.ASC') }}</option>
                                    <option value="desc">{{ __('app.DESC') }}</option>
                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                <x-jet-label class="text-xs" for="trashed" value="{{ __('app.Show Trashed') }}"/>
                                <x-jet-checkbox wire:model="trashed" value="true" id="trashed" type="text"
                                                class="block mt-3 w-7 h-7"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-0 overflow-hidden mt-7">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700/30">
                                <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                                <th class="px-4 py-3">
                                    <span>{{ __('user.name') }}</span>
                                    <span class="text-xx">/ {{ __('user.username') }}</span>
                                </th>
                                <th class="px-2 py-3 text-center">{{ __('user.email') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('user.role') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('user.country') }}</th>
                                <th class="px-2 py-3 text-center">{{ $trashed ? __('app.deleted_at') : __('app.created_at') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('app.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                            @forelse($users as $user)
                                <tr class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-200 hover:bg-gray-100 hover:dark:bg-gray-700">
                                    <td class="px-2 py-3 text-center text-xx">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div class="relative hidden w-10 h-10 rounded-full ltr:mr-3 rtl:ml-3 md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                     src="{{ $user->profile_photo_url }}"
                                                     alt="..."
                                                />
                                                <div class="absolute bottom-0 w-2 h-2 {{ $user->isOnline() ? 'bg-green-500' : 'bg-gray-500' }} rounded-full ltr:left-0 rtl:right-0 ltr:ml-1 rtl:mr-1"></div>
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                     aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <span class="font-semibold">{{ $user->name }}</span>
                                                <span class="block text-xs text-gray-600 lowercase dark:text-gray-400">{{ $user->username }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2 py-3 text-sm text-center lowercase">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-2 py-3 text-xs text-center">
                                        @if($user->role)
                                        <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $user->role->color }}">
                                            {{ $user->role->name }}
                                        </span>
                                        @elseif($user->role_id)
                                            <span class="px-2 py-1 font-semibold line-through leading-tight rounded-full {{ $user->role()->withTrashed()->first()->color }}">
                                            {{ $user->role()->withTrashed()->first()->name }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-2 py-3 text-sm text-center">
                                        @if($user->country)
                                            {{ $user->country->name }}
                                        @elseif($user->country_id)
                                            <span class="line-through">{{ $user->country()->withTrashed()->first()->name }}</span>
                                        @endif
                                    </td>
                                    <td class="px-2 py-3 text-sm text-center">
                                        {{ $trashed ? $user->deleted_at->diffForHumans() : $user->created_at->diffForHumans() }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center justify-between gap-1 text-sm text-center">

                                            @if($trashed)
                                                @can('restore', $user)
                                                    <x-jet-button wire:click="selectedItem('restore',{{ $user->id }})"
                                                                  class="px-2">
                                                        <x-svg.svg-restore class="w-5 h-5"/>
                                                    </x-jet-button>
                                                @endcan

                                                @can('forceDelete', $user)
                                                    <x-jet-button
                                                            wire:click="selectedItem('forceDelete',{{ $user->id }})"
                                                            class="px-2">
                                                        <x-svg.svg-force-delete class="w-5 h-5"/>
                                                    </x-jet-button>
                                                @endcan

                                            @else
                                                @can('update', $user)
                                                    <x-jet-button wire:click="selectedItem('update',{{ $user->id }})"
                                                                  class="px-2">
                                                        <x-svg.svg-update class="w-5 h-5"/>
                                                    </x-jet-button>
                                                @endcan



                                                @can('view', $user)
                                                    <x-jet-button wire:click="selectedItem('show',{{ $user->id }})"
                                                                  class="px-2">
                                                        <x-svg.svg-show class="w-5 h-5"/>
                                                    </x-jet-button>
                                                @endcan


                                                @can('delete', $user)
                                                    <x-jet-button wire:click="selectedItem('delete',{{ $user->id }})"
                                                                  class="px-2">
                                                        <x-svg.svg-delete class="w-5 h-5"/>
                                                    </x-jet-button>
                                                @endcan

                                            @endif


                                        </div>
                                    </td>
                                </tr>
                            @empty

                                <tr>
                                    <td colspan="7"
                                        class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">{{ __('app.No Data') }}</td>
                                </tr>

                            @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if(!empty($users))
                        <div class="px-4 py-3 border-t dark:border-gray-700">
                            {{ $users->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <livewire:admin.user.user-create :countries="$countries" :roles="$roles"/>
    <livewire:admin.user.user-update :countries="$countries" :roles="$roles"/>
    <livewire:admin.user.user-show/>
    <livewire:admin.user.user-delete/>


</div>
