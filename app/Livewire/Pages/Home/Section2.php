<?php

namespace App\Livewire\Pages\Home;

use Livewire\Component;

class Section2 extends Component
{
    public $title;
    public $text;
    public $image;
    public $items;

    public function render()
    {
        return view('livewire.pages.home.section2');
    }
}
