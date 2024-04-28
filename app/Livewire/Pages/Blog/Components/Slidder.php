<?php

namespace App\Livewire\Pages\Blog\Components;

use App\Models\admin\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Slidder extends Component
{

    public $lastBlogs;

    public function mount(): void
    {
        $this->lastBlogs = \App\Models\admin\Blog::orderBy('created_at')->take(8)->select('show_title', 'show_description', 'image', 'slug')->get();
    }
    public function render(): View|Application|Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.blog.components.slidder');
    }
}
