<?php

namespace App\Livewire;

use App\Livewire\Forms\CreatePost;
use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;

    public CreatePost $form;

    public $showEditDialog = false;

    public function archive()
    {
        $this->post->archive();
    }

    public function mount()
    {
        $this->form->setPost($this->post);
    }

    public function save()
    {
        $this->form->update();

        $this->post->refresh();

        $this->reset('showEditDialog');
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
