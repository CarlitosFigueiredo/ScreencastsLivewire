<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfileForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class EditProfile extends Component
{
    public ProfileForm $form;

    public $showSuccessIndicator = false;

    public function mount()
    {
        $this->form->setUser(auth()->user());
    }

    public function save()
    {
        $this->form->update();

        sleep(1);

        $this->showSuccessIndicator = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
