<?php

namespace App\Http\Livewire;

use App\Events\PostCreated;
use Livewire\Component;

class PostForm extends Component
{
    public string $body = '';

    protected array $rules = [
        'body' => 'required',
    ];

    public function store()
    {
        $this->validate();
        $post = auth()->user()->posts()->create([
            'body' => $this->body,
        ]);

        broadcast(new PostCreated($post));
        $this->body = '';
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
