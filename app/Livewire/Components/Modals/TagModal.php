<?php

namespace App\Livewire\Components\Modals;

use App\Models\admin\Blog;
use App\Models\admin\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class TagModal extends Component
{
    public $model;

    public $search;

    public $tagsSearch;

    public $showDropdown = false;

    public function addItem(): void
    {
        $this->tagsSearch = Tag::where('title', 'LIKE', "%$this->search%")->get();
        if ($this->tagsSearch) {
            $this->showDropdown = true;
        }
    }

    public function removeTag(Tag $tag): void
    {
        $this->model->tags()->detach($tag->id);
    }

    public function addNewTag(Blog $blog, Tag $tag): void
    {
        $blog->tags()->syncWithoutDetaching($tag->id);
    }

    public function render(): View|Application|Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.components.modals.tag-modal');
    }
}
