<?php

namespace App\Livewire\Pages\Home;

use Livewire\Component;

class Header extends Component
{
    public $title;
    public $text;
    public $image;

    public function render()
    {
        return view('livewire.pages.home.header');
    }
}
