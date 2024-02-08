<div>
    <div class="max-w-7xl mx-4 py-10 sm:px-6 lg:px-8">
        <x-input wire:model.live.debounce.500ms="search" class="w-full" placeholder="Search user by name or email..." /> 
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
</div>
