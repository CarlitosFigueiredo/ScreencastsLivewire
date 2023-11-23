<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.app')]
class ExamplesAlpine extends Component
{
    #[Rule('required', message: 'Yo, add a title')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/showPosts', navigate: true);
    }


    public function render()
    {
        return view('livewire.examples-alpine');
    }
}
