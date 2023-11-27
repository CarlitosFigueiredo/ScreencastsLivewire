<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Signup extends Component
{
    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }
    
    public function render()
    {
        return view('livewire.signup');
    }
}
