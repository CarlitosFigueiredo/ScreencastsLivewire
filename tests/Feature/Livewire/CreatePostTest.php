<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_post()
    {
        $post = Post::whereTitle('Some title')->first();

        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'Some title')
            ->set('content', 'Some content')
            ->call('save');

        $post = Post::whereTitle('Some title')->first();

        $this->assertNotNull($post);
        $this->assertEquals('Some title', $post->title);
        $this->assertEquals('Some content', $post->content);
    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }
}
