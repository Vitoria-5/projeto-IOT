<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ambiente_id',
        'codigo', // TEMPO1, TEMPO2, LED1, LED2...
        'tipo', // led, temperatura...
        'descricao',
        'status' // ativo ou inativo
    ];

    public function registros()
    {
        return $this->hasMany(Registro::class);
    }

    public function ambientes()
    {
        return $this->belongsTo(Ambiente::class);
    }
}
