<div>
    <div>
        <x-label for="keyword" value="{{ __('Search User...') }}" />
        <x-input wire:model.live.debounce.500ms="keyword" id="keyword" class="block mt-1 w-full border border-gray-100 h-8 px-2" type="keyword" />
    </div>

    <div class="my-4 py-4">
        <ol>
            @foreach($users as $user)
                <li class="py-2">{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ol>
    </div>
</div>
