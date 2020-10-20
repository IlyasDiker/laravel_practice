<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSavePost()
    {
        $post = new Post();
        $post->title = "TestPost";
        $post->content = "TestPostContnet";
        $post->slug = Str::slug($post->title, '-');
        $post->active = false;

        $post->save();

        $this->assertDatabaseHas('posts', [
            'title' => 'TestPost'
        ]);
    }
}
