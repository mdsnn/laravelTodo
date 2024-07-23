<?php

namespace App\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public $todo = '';
    public $todos = [
        'Take out the trash',
        'Do the dishes',

    ];
    public function add(){
        $this->todos[] = $this->todo;
        $this->reset('todo');

    }
    public function render()
    {
        return view('livewire.hello');
    }
}
