<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Posts extends Component
{
    public Collection $posts;

    public function mount(): void
    {
        $this->posts = Post::latest()->take(100)->get();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.posts');
    }
}
