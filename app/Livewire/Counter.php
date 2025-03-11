<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $newValue;

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        $this->count--;
    }

    public function changeCount(int $newValue) {
        $this->count = $newValue;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
