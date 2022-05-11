<div>
    <x-jet-dialog-modal wire:model="showUpdateModel">
        <x-slot name="title">
            {{ __('app.update') }} {{ __('user.user') }}
        </x-slot>

        <form wire:submit.prevent="edit" autocomplete="off">

            <x-slot name="content">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">

                    <div class="col-span-1 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="name" value="{{ __('user.name') }}"/>
                        <x-jet-input wire:model.defer="name" type="text" class="mt-1 block w-full" />
                        <x-jet-input-error for="name" class="mt-2"/>
                    </div>

                    <div class="col-span-2 md:col-span-4 lg:col-span-2 lg:row-span-2 order-last lg:order-none">
                        <div class="flex flex-row items-center justify-center">
                            <div class="relative mt-4">
                                <div class="w-24 h-24 bg-gray-200 dark:bg-gray-700 rounded-full">
                                    @if(!empty($profilePhotoPath))

                                        <img src="{{ $profilePhotoPath->temporaryUrl() }}"
                                             class="object-cover w-24 h-24 rounded-full">

                                    @elseif(!empty($profile_photo_path))
                                        <img src="{{ $profile_photo_path }}"
                                             class="object-cover w-24 h-24 rounded-full">
                                    @endif
                                </div>
                                <span class="absolute bottom-0 left-0 w-8 h-8 p-2 rounded-full bg-primary-600 shadow-md">
                                <label>
                                    <svg wire:target="profilePhotoPath" wire:loading.class="animate-bounce" class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                    <input wire:model="profilePhotoPath" type="file" accept="image/png, image/jpeg" class="hidden opacity-0">
                                </label>
                            </span>
                                <x-jet-input-error for="profilePhotoPath" class="mt-2"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="username" value="{{ __('user.username') }}"/>
                        <x-jet-input wire:model.defer="username" type="text" class="mt-1 block w-full"/>
                        <x-jet-input-error for="username" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="email" value="{{ __('user.email') }}"/>
                        <x-jet-input wire:model.defer="email" type="text" class="mt-1 block w-full"/>
                        <x-jet-input-error for="email" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label class="text-xs" for="select" value="{{ __('country.country') }}"/>
                        <x-select wire:model="countryId" wire:key="countryUpdate" class="mt-1">
                            <option value="" readonly="true" hidden="true"
                                    selected>{{ __('country.select country') }}</option>
                            @forelse($countries as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="countryId" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label class="text-xs" for="select" value="{{ __('city.city') }}"/>
                        <x-select wire:model="cityId" wire:key="cityUpdate" class="mt-1">
                            <option value="" readonly="true" hidden="true"
                                    selected>{{ __('city.select city') }}</option>
                            @forelse($cities as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="cityId" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label class="text-xs" for="roleId" value="{{ __('role.role') }}"/>
                        <x-select wire:model="roleId" wire:key="roleUpdate" class="mt-1">
                            <option value="" readonly="true" hidden="true"
                                    selected>{{ __('role.select role') }}</option>
                            @forelse($roles as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="roleId" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="password" value="{{ __('user.password') }}"/>
                        <x-jet-input wire:model.defer="password" type="password" class="mt-1 block w-full"/>
                        <x-jet-input-error for="password" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                        <x-jet-input wire:model.defer="password_confirmation"
                                     class="block mt-1 w-full" type="password"
                                     required autocomplete="new-password"/>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeUpdateModel" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button type="submit" wire:click="edit" wire:loading.attr="disabled" class="ltr:ml-3 rtl:mr-3">
                    {{ __('app.update') }}
                </x-jet-button>
            </x-slot>
        </form>

    </x-jet-dialog-modal>
</div>
