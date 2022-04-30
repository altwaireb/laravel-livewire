@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="text-lg bg-primary-600 p-4 text-white">
        {{ $title }}
    </div>
    <div class="px-6 py-4">
        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-700 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>
