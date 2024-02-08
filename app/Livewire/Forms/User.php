<?php

namespace App\Livewire\Forms;

use App\Models\User as Model;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class User extends Component
{
    #[Validate('required|string|max:100')]
    public string $name = '';

    #[Validate('required|string|email|max:100|unique:users')]
    public string $email = '';

    #[Validate('required|string|confirmed')]
    public string $password = '';

    public string $password_confirmation = '';

    public function save()
    {
        $this->validate();

        Model::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->dispatch('saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.forms.user');
    }
}
