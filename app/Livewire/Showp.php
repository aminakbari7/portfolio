<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\web;
use App\Models\machinelearning;

class Showp extends Component
{
    public $del;
    public $up;
    public $upkey=-1;
    public $ed;
    public $newtitle=null,$newlink=null,$newbody=null;
    public function deletep($id)
    {
        $this->del=$id;
        machinelearning::destroy( $this->del);
           
        Session()->flash('msg', 'حذف شد!'); 
        $ml=machinelearning::all();
        return view('livewire.showp',['ml'=>$ml]);
    }
    public function edit($id)
    {
        $this->ed=$id;
        $temp=machinelearning::find($this->ed);
        if($this->newtitle!=null)
        {
            $temp->title= $this->title;
        }
        if($this->newlink!=null)
        {
            $temp->link = $this->newlink;
        }
        if($this->newbody!=null)
        {
            $temp->body= $this->newbody;
        }
        if($this->newtitle!=null || $this->newbody!=null || $this->newlink!=null)
        {
            $temp->save();
        }
        $ml=machinelearning::all();
        $this->upkey=-1;
        return view('livewire.showp',['ml'=>$ml]);
    }
    public function updatep($id)
    {
        $this->up=$id;
        $this->upkey=1;
        $ml=machinelearning::all();
        return view('livewire.showp',['ml'=>$ml]);
    }
    public function render()
    {
        
        $ml=machinelearning::all();
        return view('livewire.showp',['ml'=>$ml]);
    }
}
