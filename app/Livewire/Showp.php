<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\web;
use App\Models\machinelearning;

class Showp extends Component
{
    public function render()
    {
        
        $ml=machinelearning::all();
        return view('livewire.showp',['ml'=>$ml]);
    }
}
