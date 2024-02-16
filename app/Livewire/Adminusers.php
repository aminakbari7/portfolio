<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class Adminusers extends Component
{

    public $users;
    public $uid=0;
    public $ukey=-1;
    public $newname,$newrole,$newemail;
    public function mount()
    {
        $this->users=user::all();
    }
    public function deleteuser($id)
    {
        user::destroy($id);
        $this->users=user::all();
    }
    public function updateuser($id)
    {
        $this->uid=$id;
        $this->ukey=1;
        $this->users=user::all();
    }
    public function saveupdate($id)
    {
        $temp=user::find($id);
        if($this->newname!=null)
        {
            $temp->name= $this->newname;
        }
        if($this->newemail!=null)
        {
            $temp->email= $this->newemail;
        }
        if($this->newrole!=null)
        {
            $temp->role = $this->newrole;
        } 
        if($this->newname!=null || $this->newrole!=null || $this->newemail!=null )
        {
            $temp->save();
        }


        $this->uid=0;
        $this->ukey=-1;
        $this->users=user::all();
    }
    public function cancelup()
    {$this->uid=0;
        $this->ukey=-1;
        $this->users=user::all();

    }


    public function render()
    {
        return view('livewire.adminusers');
    }
}
