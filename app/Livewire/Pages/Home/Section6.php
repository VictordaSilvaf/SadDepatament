<?php

namespace App\Livewire\Pages\Home;

use Livewire\Component;

class Section6 extends Component
{
    public $title;
    public $image;
    public $items;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.home.section6');
    }
}
