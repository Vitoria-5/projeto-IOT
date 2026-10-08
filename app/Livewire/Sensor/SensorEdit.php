<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function default($id)
    {
        $sensor = Sensor::find($id);

        $this->ambiente_id = $sensor->ambiente_id;
        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
    }
    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
