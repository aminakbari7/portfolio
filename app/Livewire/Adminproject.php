<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\project;
use Livewire\WithPagination;
class Adminproject extends Component
{use WithPagination;

    public $projects;
    public $delid=0;
    public $keyup=-1;
    public $keyid=0;
    public $newtitle=null,$newlink=null,$newbody=null,$newcase;
    public function updateproject($id)
    {
    
        $this->keyup=1;
        $this->keyid=$id;
       
        
    }


    public function saveup($id)
    {
        
        $temp=project::find($id);
        if($this->newtitle!=null)
        {
            $temp->title= $this->title;
        }
        if($this->newcase!=null)
        {
            $temp->case= $this->case;
        }
        if($this->newlink!=null)
        {
            $temp->link = $this->newlink;
        }
        if($this->newbody!=null)
        {
            $temp->body= $this->newbody;
        }
        if($this->newtitle!=null || $this->newbody!=null || $this->newlink!=null || $this->newcase!=null)
        {
            $temp->save();
        }
        $this->keyup=-1;
        $this->keyid=0;
        $this->mount();
        return view('livewire.adminproject');

    }
    public function cancelup()
{        $this->keyup=-1;
        $this->keyid=0;
    }



    public function deleteproject($id)
    {
        $this->delid=$id;
        project::destroy( $this->delid);
       $this->mount();
       return view('livewire.adminproject');

    }
    public function mount()
    {
        $this->projects=project::all();
    }
    public function render()
    { 
        
        
        return view('livewire.adminproject');
    }
}
