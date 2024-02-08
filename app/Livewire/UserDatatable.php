<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserDatatable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user-datatable', [
            'users' => User::paginate(),
        ]);
    }
}
