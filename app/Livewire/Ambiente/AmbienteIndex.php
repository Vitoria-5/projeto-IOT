<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.ambiente.ambiente-index', compact('ambientes'));
    }
}
