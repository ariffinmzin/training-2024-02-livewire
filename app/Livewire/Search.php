<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public string $keyword = '';
    public $users;

    public function mount()
    {
        $this->users = collect();
    }

    public function updatedKeyword()
    {
        $this->doSearch();
    }

    public function doSearch()
    {
        if(strlen($this->keyword) < 3) {
            return;
        }

        $this->users = User::query()
            ->where('email', 'like', '%'.$this->keyword.'%')
            ->orWhere('name', 'like', '%'.$this->keyword.'%')
            ->get();
    }

    public function render()
    {
        return view('livewire.search');
    }
}
