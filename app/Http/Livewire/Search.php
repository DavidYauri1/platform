<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    //Hola mundo
    //Mundo
    public function getResultsProperty(){
        return Course::where('title', 'lIKE', '%'.$this->search . '%')->where('status',3)->take(8)->get();
    }

}
