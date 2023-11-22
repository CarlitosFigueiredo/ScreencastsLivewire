<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ShowPosts extends Component
{
    public function render()
    {
        return view('livewire.show-posts', [

            'posts' => Post::all(),
        ]);
    }
}
