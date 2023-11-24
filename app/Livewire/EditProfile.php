<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
class EditProfile extends Component
{
    public User $user;

    #[Validate()]
    public $name = '';
    public $bio = '';

    public $showSuccessIndicator = false;

    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('users')->ignore($this->user),
            ]
        ];
    }

    public function mount()
    {
        $this->user = auth()->user();

        $this->name = $this->user->name;
        $this->bio = $this->user->bio;
    }

    public function save()
    {
        $this->validate();

        $this->user->name = $this->name;
        $this->user->bio = $this->bio;

        $this->user->save();

        sleep(1);

        $this->showSuccessIndicator = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
