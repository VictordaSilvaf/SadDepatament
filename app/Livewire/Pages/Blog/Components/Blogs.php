<?php

namespace App\Livewire\Pages\Blog\Components;

use App\Models\admin\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public function render(): View|Application|Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.blog.components.blogs', [
            'blogs' => Blog::simplePaginate(9)
        ]);
    }
}
