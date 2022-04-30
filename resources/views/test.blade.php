<!-- Token Value Modal -->

<x-slot name="content">
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">

        <div class="col-span-2 md:col-span-4 lg:col-span-1 lg:row-span-3 order-last lg:order-none">
            <div class="flex flex-row items-center justify-center">
                <div class="relative mt-4">
                    <div class="w-20 h-20 bg-gray-200 dark:bg-gray-700 rounded-full">
                        @if(!empty($item->profile_photo_url))
                            <img src="{{ $item->profile_photo_url }}"
                                 class="object-cover w-20 h-20 rounded-full">
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <div class="col-span-1 md:col-span-2 lg:col-span-3">
            <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.name') }}</div>
                <div class=" text-sm font-bold z-10">{{ $item->name }}</div>
            </div>
        </div>


        <div class="col-span-1 md:col-span-2 lg:col-span-2">
            <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.username') }}</div>
                <div class=" text-sm font-bold z-10">{{ $item->username }}</div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-3">
            <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.email') }}</div>
                <div class=" text-sm font-bold z-10">{{ $item->email }}</div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-2">
            <div class="relative  p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.role') }}</div>
                <div class="flex w-full ">
                    <div class="px-2 py-1 z-10 text-xs mx-auto font-semibold leading-tight rounded-full drop-shadow-md {{ $item->role->color }}">
                        {{ $item->role->name }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-3">
            <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.country') }}</div>
                <div class=" text-sm font-bold z-10">{{ $item->country->name }}</div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-2">
            <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.city') }}</div>
                <div class=" text-sm font-bold z-10">{{ $item->city->name }}</div>
            </div>
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




<x-select wire:model="color">
    <optgroup label="gray">
        <option value="bg-gray-50 text-black">bg-gray-50 text-black</option>
        <option value="bg-gray-100 text-black">bg-gray-100 text-black</option>
        <option value="bg-gray-200 text-black">bg-gray-200 text-black</option>
        <option value="bg-gray-300 text-black">bg-gray-300 text-black</option>
        <option value="bg-gray-400 text-black">bg-gray-400 text-black</option>
        <option value="bg-gray-500 text-white">bg-gray-500 text-white</option>
        <option value="bg-gray-600 text-white">bg-gray-600 text-white</option>
        <option value="bg-gray-700 text-white">bg-gray-700 text-white</option>
        <option value="bg-gray-800 text-white">bg-gray-800 text-white</option>
        <option value="bg-gray-900 text-white">bg-gray-900 text-white</option>
    </optgroup>
    <optgroup label="red">
        <option value="bg-red-50 text-black">bg-red-50 text-black</option>
        <option value="bg-red-100 text-black">bg-red-100 text-black</option>
        <option value="bg-red-200 text-black">bg-red-200 text-black</option>
        <option value="bg-red-300 text-black">bg-red-300 text-black</option>
        <option value="bg-red-400 text-black">bg-red-400 text-black</option>
        <option value="bg-red-500 text-white">bg-red-500 text-white</option>
        <option value="bg-red-600 text-white">bg-red-600 text-white</option>
        <option value="bg-red-700 text-white">bg-red-700 text-white</option>
        <option value="bg-red-800 text-white">bg-red-800 text-white</option>
        <option value="bg-red-900 text-white">bg-red-900 text-white</option>
    </optgroup>
    <optgroup label="orange">
        <option value="bg-orange-50 text-black">bg-orange-50 text-black</option>
        <option value="bg-orange-100 text-black">bg-orange-100 text-black</option>
        <option value="bg-orange-200 text-black">bg-orange-200 text-black</option>
        <option value="bg-orange-300 text-black">bg-orange-300 text-black</option>
        <option value="bg-orange-400 text-black">bg-orange-400 text-black</option>
        <option value="bg-orange-500 text-white">bg-orange-500 text-white</option>
        <option value="bg-orange-600 text-white">bg-orange-600 text-white</option>
        <option value="bg-orange-700 text-white">bg-orange-700 text-white</option>
        <option value="bg-orange-800 text-white">bg-orange-800 text-white</option>
        <option value="bg-orange-900 text-white">bg-orange-900 text-white</option>
    </optgroup>
    <optgroup label="yellow">
        <option value="bg-yellow-50 text-black">bg-yellow-50 text-black</option>
        <option value="bg-yellow-100 text-black">bg-yellow-100 text-black</option>
        <option value="bg-yellow-200 text-black">bg-yellow-200 text-black</option>
        <option value="bg-yellow-300 text-black">bg-yellow-300 text-black</option>
        <option value="bg-yellow-400 text-black">bg-yellow-400 text-black</option>
        <option value="bg-yellow-500 text-white">bg-yellow-500 text-white</option>
        <option value="bg-yellow-600 text-white">bg-yellow-600 text-white</option>
        <option value="bg-yellow-700 text-white">bg-yellow-700 text-white</option>
        <option value="bg-yellow-800 text-white">bg-yellow-800 text-white</option>
        <option value="bg-yellow-900 text-white">bg-yellow-900 text-white</option>
    </optgroup>
    <optgroup label="green">
        <option value="bg-green-50 text-black">bg-green-50 text-black</option>
        <option value="bg-green-100 text-black">bg-green-100 text-black</option>
        <option value="bg-green-200 text-black">bg-green-200 text-black</option>
        <option value="bg-green-300 text-black">bg-green-300 text-black</option>
        <option value="bg-green-400 text-black">bg-green-400 text-black</option>
        <option value="bg-green-500 text-white">bg-green-500 text-white</option>
        <option value="bg-green-600 text-white">bg-green-600 text-white</option>
        <option value="bg-green-700 text-white">bg-green-700 text-white</option>
        <option value="bg-green-800 text-white">bg-green-800 text-white</option>
        <option value="bg-green-900 text-white">bg-green-900 text-white</option>
    </optgroup>
    <optgroup label="blue">
        <option value="bg-blue-50 text-black">bg-blue-50 text-black</option>
        <option value="bg-blue-100 text-black">bg-blue-100 text-black</option>
        <option value="bg-blue-200 text-black">bg-blue-200 text-black</option>
        <option value="bg-blue-300 text-black">bg-blue-300 text-black</option>
        <option value="bg-blue-400 text-black">bg-blue-400 text-black</option>
        <option value="bg-blue-500 text-white">bg-blue-500 text-white</option>
        <option value="bg-blue-600 text-white">bg-blue-600 text-white</option>
        <option value="bg-blue-700 text-white">bg-blue-700 text-white</option>
        <option value="bg-blue-800 text-white">bg-blue-800 text-white</option>
        <option value="bg-blue-900 text-white">bg-blue-900 text-white</option>
    </optgroup>
    <optgroup label="indigo">
        <option value="bg-indigo-50 text-black">bg-indigo-50 text-black</option>
        <option value="bg-indigo-100 text-black">bg-indigo-100 text-black</option>
        <option value="bg-indigo-200 text-black">bg-indigo-200 text-black</option>
        <option value="bg-indigo-300 text-black">bg-indigo-300 text-black</option>
        <option value="bg-indigo-400 text-black">bg-indigo-400 text-black</option>
        <option value="bg-indigo-500 text-white">bg-indigo-500 text-white</option>
        <option value="bg-indigo-600 text-white">bg-indigo-600 text-white</option>
        <option value="bg-indigo-700 text-white">bg-indigo-700 text-white</option>
        <option value="bg-indigo-800 text-white">bg-indigo-800 text-white</option>
        <option value="bg-indigo-900 text-white">bg-indigo-900 text-white</option>
    </optgroup>
    <optgroup label="purple">
        <option value="bg-purple-50 text-black">bg-purple-50 text-black</option>
        <option value="bg-purple-100 text-black">bg-purple-100 text-black</option>
        <option value="bg-purple-200 text-black">bg-purple-200 text-black</option>
        <option value="bg-purple-300 text-black">bg-purple-300 text-black</option>
        <option value="bg-purple-400 text-black">bg-purple-400 text-black</option>
        <option value="bg-purple-500 text-white">bg-purple-500 text-white</option>
        <option value="bg-purple-600 text-white">bg-purple-600 text-white</option>
        <option value="bg-purple-700 text-white">bg-purple-700 text-white</option>
        <option value="bg-purple-800 text-white">bg-purple-800 text-white</option>
        <option value="bg-purple-900 text-white">bg-purple-900 text-white</option>
    </optgroup>
    <optgroup label="pink">
        <option value="bg-pink-50 text-black">bg-pink-50 text-black</option>
        <option value="bg-pink-100 text-black">bg-pink-100 text-black</option>
        <option value="bg-pink-200 text-black">bg-pink-200 text-black</option>
        <option value="bg-pink-300 text-black">bg-pink-300 text-black</option>
        <option value="bg-pink-400 text-black">bg-pink-400 text-black</option>
        <option value="bg-pink-500 text-white">bg-pink-500 text-white</option>
        <option value="bg-pink-600 text-white">bg-pink-600 text-white</option>
        <option value="bg-pink-700 text-white">bg-pink-700 text-white</option>
        <option value="bg-pink-800 text-white">bg-pink-800 text-white</option>
        <option value="bg-pink-900 text-white">bg-pink-900 text-white</option>
    </optgroup>
</x-select>