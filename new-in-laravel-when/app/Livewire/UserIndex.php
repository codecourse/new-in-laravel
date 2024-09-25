<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UserIndex extends Component
{
    public function launchEditModal()
    {
        dd('launch edit modal');
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.user-index', [
            'users' => User::get()
        ]);
    }
}
