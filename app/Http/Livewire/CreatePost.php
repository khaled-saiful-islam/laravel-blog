<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $post;
    public $postId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = [];
        return array_merge([
            'post.title' => 'required|min:3',
            'post.content' => 'string',
            'post.url_slug' => 'required|string|unique:posts,url_slug,' . $this->postId,
            'post.meta_description' => 'string'
        ], $rules);
    }

    public function createPost ()
    {
        $this->resetErrorBag();
        $this->validate();

        $user = auth()->user();
        $this->post['user_id'] =$user->id;
        Post::create($this->post);

        $this->emit('saved');
        $this->reset('post');
    }

    public function updatePost ()
    {
        $this->resetErrorBag();
        $this->validate();

        Post::query()
            ->where('id', $this->postId)
            ->update([
                "title" => $this->post->title,
                "content" => $this->post->content,
                "url_slug" => $this->post->url_slug,
                "meta_description" => $this->post->meta_description,
            ]);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!$this->post && $this->postId) {
            $this->post = Post::find($this->postId);
        }

        $this->button = create_button($this->action, "Post");
    }

    public function render()
    {
        $user = auth()->user();
        return view('livewire.create-post', ['user_id' => $user->id]);
    }
}
