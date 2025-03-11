<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $bird_count;
    public string $notes;

    public function submit() {

        // used when the class attributes are the same as the model.
        // the '->pull()' property says that you are pulling the data from the origin
        // and pushing into the model (which clears the form)
        Entry::create($this->pull());

        /* Entry::create([
            'bird_count' => $this->count,
            'notes' => trim($this->notes)
        ]);

        $this->reset(); */
    }
    public function render()
    {
        return view('livewire.bird-form');
    }
}
