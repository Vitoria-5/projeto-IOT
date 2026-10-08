<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public function render()
    {
        $sensors = Sensor::all();
        return view('livewire.sensor.sensor-index', compact('sensors'));
    }
}
