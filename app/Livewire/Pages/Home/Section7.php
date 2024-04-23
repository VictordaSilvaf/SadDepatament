<?php

namespace App\Livewire\Pages\Home;

use App\Models\admin\Blog;
use Livewire\Component;

class Section7 extends Component
{
    public $title;
    public function mount()
    {
    }

    public function render()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('livewire.pages.home.section7', compact('blogs'));
    }
}
