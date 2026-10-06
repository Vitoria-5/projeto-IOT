<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sensor_id',
        'valor',
        'unidade',
        'data_hora'
    ];

    public function sensors()
    {
        return $this->belongsTo(Sensor::class);
    }
}
