<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class EditProfile extends Component
{
    public User $user;
    public $name = '';
    public $bio = '';

    public function mount()
    {
        $this->user = auth()->user();

        $this->name = $this->user->name;
        $this->bio = $this->user->bio;
    }

    public function save()
    {
        $this->user->name = $this->name;
        $this->user->bio = $this->bio;
        $this->user->save();
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
