<?php

namespace App\Livewire\Pages\Home;

use App\Models\admin\Blog;
use Livewire\Component;

class Section4 extends Component
{
    public $title;
    public $blogs;

    public function mount(): void
    {
        $this->blogs = Blog::latest()->take(3)->get();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.home.section4');
    }
}
