<?php

namespace App\Livewire\Dashboard\Components\Form;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileInput extends Component
{
    use WithFileUploads;

    #[Validate('image|max:102400')] // 100MB Max
    public $photo;

    public $image;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.dashboard.components.form.file-input');
    }
}
