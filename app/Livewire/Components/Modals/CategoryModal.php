<?php

namespace App\Livewire\Components\Modals;

use App\Models\admin\Blog;
use App\Models\admin\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class CategoryModal extends Component
{
    public $model;

    public $search;

    public $categoriesSearch;

    public $showDropdown = false;

    public function addItem(): void
    {
        $this->categoriesSearch = Category::where('title', 'LIKE', "%$this->search%")->get();
        if ($this->categoriesSearch) {
            $this->showDropdown = true;
        }
    }

    public function removeCategory(Category $categoria): void
    {
        $this->model->categories()->detach($categoria->id);
    }

    public function addNewCategory(Blog $blog, Category $categoria): void
    {
        $blog->categories()->syncWithoutDetaching($categoria->id);
    }

    public function render(): View|Application|Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.components.modals.category-modal');
    }
}
