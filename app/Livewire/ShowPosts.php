<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ShowPosts extends Component
{
    public function delete(Post $post)
    {
        // Authorization...

        $post->delete();

        sleep(1);
    }

    public function render()
    {
        return view('livewire.show-posts', [

            'posts' => Post::all(),
        ]);
    }
}
