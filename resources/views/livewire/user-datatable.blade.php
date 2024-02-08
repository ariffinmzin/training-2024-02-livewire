<div>
    <ol>
        {{ $users->links() }}
        @foreach ($users as $user)
            <li class="py-2">{{ $user->name }}</li>
        @endforeach
        {{ $users->links() }}
    </ol>
</div>
