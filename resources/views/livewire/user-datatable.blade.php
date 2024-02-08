<div>
    <div class="py-4">
        <x-input wire:model.live.debounce.500ms="search" class="w-1/2" placeholder="Search user by name or email..." />
    </div>
    <div class="flex justify-between py-4">
        <select wire:model.live.debounce.500ms="perPage"
            class=" border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-gray-600 rounded-md shadow-sm">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        {{ $users->links() }}
    </div>
    <div class="bg-white border border-slate-300 rounded-md shadow-md m-4">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">
                            Name
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            E-mail
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            E-mail Verified At
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Joined At
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-sm font-semibold text-gray-900 text-center">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td>
                            <p class="text-center italic my-4 py-4 text-sm w-full" wire:loading>
                                Populating data...
                            </p>
                        </td>
                    </tr>
                    @forelse ($users as $user)
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                {{ $user->name }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->email }}
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                {{ $user->email_verified_at }}
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                {{ $user->created_at }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 justify-center gap-4">
                                <x-secondary-button>
                                    View
                                </x-secondary-button>
                                <x-button>
                                    Update
                                </x-button>
                                <x-button
                                    onclick="confirm('Are you sure want to delete {{ $user->name }} ?') || event.stopImmediatePropagation()"
                                    wire:click="removeUser({{ $user->id }})" class="bg-red-700 mx-2">
                                    Delete
                                </x-button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">No users found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="py-4 flex justify-between ">
        <select wire:model.live.debounce.500ms="perPage"
            class=" border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-gray-600 rounded-md shadow-sm">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        {{ $users->links() }}
    </div </div>
