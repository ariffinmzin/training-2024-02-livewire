<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Counter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-8">
                <h1>{{ $count }}</h1>

                <x-button wire:click="tambah">+</x-button>

                <x-button wire:click="tolak">-</x-button>
            </div>
        </div>
    </div>
</div>
