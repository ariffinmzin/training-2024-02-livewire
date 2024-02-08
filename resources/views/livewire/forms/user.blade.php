<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-8">
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" wire:model="name"
                        required autofocus autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" wire:model="email"
                        required autocomplete="username" />
                    <x-input-error for="email" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" wire:model="password" required
                        autocomplete="new-password" />
                    <x-input-error for="password" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    wire:model="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-action-message class="me-3" on="saved">
                        {{ __('User Added.') }}
                    </x-action-message>

                    <x-button wire:click="save" class="ms-4">
                        {{ __('Add User') }}
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</div>
