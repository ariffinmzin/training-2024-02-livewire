<div>
    <div class="py-4 flex justify-around ">
        <select wire:model.live.debounce.500ms="perPage"
            class=" border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-gray-600 rounded-md shadow-sm">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <x-input wire:model.live.debounce.500ms="search" class="ml-4 w-full" placeholder="Search user by name or email..." />
    </div>

    <ol>
        {{ $users->links() }}
        @forelse ($users as $user)
            <li class="py-2">{{ $user->name }}</li>
        @empty
            <li class="py-2 text-center">No users found</li>
        @endforelse
        {{ $users->links() }}
    </ol>

    <div class="py-4 flex justify-around ">
        <select wire:model.live.debounce.500ms="perPage"
            class=" border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-gray-600 rounded-md shadow-sm">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
</div>
