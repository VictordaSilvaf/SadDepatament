<?php

namespace App\Livewire\Components\Global;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUploader extends Component
{
    use WithFileUploads;

    public $images;
    public string $name;
    public $base_images;

    public function updatedImages(): void
    {
        $this->validate([
            'images.*' => 'image|max:20480',
        ]);

    }

    public function render()
    {
        return view('livewire.components.global.image-uploader');
    }
}
