<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;


Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente', AmbienteIndex::class)->name('ambiente.index');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');

Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor', SensorIndex::class)->name('sensor.index');
Route::get('/sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');