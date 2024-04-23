<?php

namespace App\Livewire;

use App\Models\admin\Settings;
use Livewire\Component;

class NavMenu extends Component
{
    public $logo;

    public function mount()
    {
        $this->logo = Settings::first()->logo;
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.nav-menu');
    }
}
