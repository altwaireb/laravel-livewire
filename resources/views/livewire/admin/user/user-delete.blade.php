<div>
    <x-jet-confirmation-modal wire:model="showDeleteModel">
        <x-slot name="title">
            {{ __('app.delete') }} {{ __('user.user') }}
        </x-slot>

        <x-slot name="content">
            {{ __('user.delete question') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closeDeleteModel" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>


    <x-jet-confirmation-modal wire:model="showRestoreModel">
        <x-slot name="title">
            {{ __('app.restore') }} {{ __('user.user') }}
        </x-slot>

        <x-slot name="content">
            {{ __('user.restore question') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closeRestoreModel" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="restore" wire:loading.attr="disabled">
                {{ __('app.restore') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>



    <x-jet-confirmation-modal wire:model="showForceDeleteModel">
        <x-slot name="title">
            {{ __('app.delete') }} {{ __('user.user') }}
        </x-slot>

        <x-slot name="content">
            {{ __('user.force delete question') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closeForceDeleteModel" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="forceDelete" wire:loading.attr="disabled">
                {{ __('app.delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>


</div>
