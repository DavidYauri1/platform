<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Sede;
use App\Models\Puesto;
use Livewire\Component;

class FirstComponent extends Component
{
    public function render()
    {
        $sedes = Sede::all();
        $puestos = Puesto::all();
        $areas = Area::all();
        return view('livewire.first-component',compact('sedes', 'puestos', 'areas'));
    }
}
