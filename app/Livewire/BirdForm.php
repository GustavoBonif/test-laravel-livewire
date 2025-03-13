<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BirdForm extends Component
{
    #[Validate('required|integer')]
    public int $bird_count;

    #[Validate('required|string')]
    public string $notes;

    public function submit() {

        $this->validate();

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

    public function mount($birdCount) {
        $this->bird_count = $birdCount;
    }

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all()
        ]);
    }
}
