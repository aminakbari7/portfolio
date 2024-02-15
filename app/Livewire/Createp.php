<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use App\Models\web;
use App\Models\machinelearning;
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
    if($this->case=='web-app')
    {
        web::Create([
        'body'=>$this->body,
       'image'=>$namei,
        'title'=>$this->title,
        'link'=>$this->link]);
        Session()->flash('msg', 'اضافه شد!'); 
        $this->render();
    }

     if($this->case=='machine-learning')
     {
         machinelearning::Create([
            'body'=>$this->body,
            'image'=>$namei,
             'title'=>$this->title,
             'link'=>$this->link]);
        Session()->flash('msg', 'اضافه شد!'); 
        $this->render();
    }

    }
    
    public function render()
    {
        return view('livewire.createp');
    }
}
