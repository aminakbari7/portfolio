<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use App\Models\project;
use Livewire\Component;

class Createp extends Component
{
    use WithFileUploads;
    public $image ;
    public $title ;
    public $link;
    public $body ;
    public $case;
    
    public function save()
    {

        $namei = md5($this->image . microtime()).'.'.$this->image->extension();
        $this->image->storeAs('images', $namei,'public');
        project::Create([
        'body'=>$this->body,
       'image'=>$namei,
       'title'=>$this->title,
        'case'=>$this->case,
        'link'=>$this->link]);
        Session()->flash('msg', 'اضافه شد!'); 
        $this->render();
 

   

    }
    
    public function render()
    {
        return view('livewire.createp');
    }
}
