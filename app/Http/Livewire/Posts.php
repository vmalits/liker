<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Component;

class Posts extends Component
{
    public Collection $posts;

    protected $listeners = ['echo:posts,PostCreated' => 'prependPost'];

    public function mount(): void
    {
        $this->posts = Post::with(['user', 'likes'])->latest()->take(100)->get();
    }

    public function prependPost(Post $post): void
    {
        $this->posts->prepend(Post::find($post['id']));
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
