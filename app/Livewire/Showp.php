<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\web;
use App\Models\machinelearning;

class Showp extends Component
{
    public $del;
    public function deletep($id)
    {
        $this->del=$id;
        machinelearning::destroy( $this->del);
           
        Session()->flash('msg', 'حذف شد!'); 
        $ml=machinelearning::all();
        return view('livewire.showp',['ml'=>$ml]);
    }
    public function render()
    {
        
        $ml=machinelearning::all();
        return view('livewire.showp',['ml'=>$ml]);
    }
}
