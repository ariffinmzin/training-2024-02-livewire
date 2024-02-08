<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class UserDatatable extends Component
{
    use WithPagination;

    #[Url(as: 'q')]
    public string $search = '';

    #[Url]
    public int $perPage = 10;

    #[Url(as: 'v')]
    public $emailVerified;

    public function render()
    {
        return view('livewire.user-datatable', [
            'users' => User::query()
                ->when(
                    strlen($this->search) > 3,
                    fn($query) => $query->search($this->search)
                )
                ->when(
                    $this->emailVerified == 1,
                    fn($query) => $query->whereNotNull('email_verified_at')
                )
                ->when(
                    $this->emailVerified == 2,
                    fn($query) => $query->whereNull('email_verified_at')
                )
                ->paginate(
                    $this->perPage
                ),
        ]);
    }

    public function removeUser($id)
    {
        if(auth()->user()->id == $id) {
            return;
        }

        User::where('id', $id)->delete();
    }
}
