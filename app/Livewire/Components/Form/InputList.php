<?php

namespace App\Livewire\Components\Form;

use Livewire\Component;

class InputList extends Component
{
    public string $title;
    public string $name;
    public $items;
    public $type;

    public function addItem(): void
    {
        if (!$this->type) {
            $this->items[] = '';
        } elseif ($this->type == '2') {
            $this->items[] = ['', ''];
        }
    }

    public function removeItem($index): void
    {
        if (isset($this->items[$index])) {
            unset($this->items[$index]);
        }
    }

    public function render()
    {
        return view('livewire.components.form.input-list');
    }
}
