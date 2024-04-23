<?php

namespace App\Livewire\Pages\Blog\Components;

use App\Models\admin\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Slidder extends Component
{
    public $blogs;

    public function mount(): void
    {
        $this->blogs = Blog::take(5)->get();
    }

    public function render(): View|Application|Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.blog.components.slidder');
    }
}
