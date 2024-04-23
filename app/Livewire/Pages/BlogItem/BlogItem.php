<?php

namespace App\Livewire\Pages\BlogItem;

use App\Models\admin\Blog;
use Livewire\Component;

class BlogItem extends Component
{
    public $blog;

    public function mount(string $slug)
    {
        $this->blog = Blog::findBySlug($slug);
    }

    public function render()
    {
        return view('livewire.pages.blog-item.blog-item');
    }
}
