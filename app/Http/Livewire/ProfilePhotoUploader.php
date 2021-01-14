<?php

namespace App\Http\Livewire;

use App\Events\ProfilePhotoUpdated;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePhotoUploader extends Component
{
    use WithFileUploads;

    public $photo;

    public $rules = [
        'photo' => 'image|max:1024',
    ];

    public function updatedPhoto(): void
    {
        $this->resetErrorBag();
    }

    public function storePhoto(): void
    {
        $this->validate();
        $user = auth()->user();
        $user->update([
            'profile_photo' => $this->photo->store('profile-photos', 'public'),
        ]);

        broadcast(new ProfilePhotoUpdated($user));
        $this->photo = null;
    }

    public function render()
    {
        return view('livewire.profile-photo-uploader');
    }
}
