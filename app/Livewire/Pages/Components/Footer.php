<?php

namespace App\Livewire\Pages\Components;

use App\Models\admin\Blog;
use App\Models\admin\Settings;
use Livewire\Component;

class Footer extends Component
{
    public $settings;
    public $blogs;

    public function mount(): void
    {
        $this->blogs = Blog::latest()->take(4)->get();
        $this->settings = Settings::first();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.components.footer');
    }
}
