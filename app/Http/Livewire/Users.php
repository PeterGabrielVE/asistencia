<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Users extends Component
{
    public $users, $first_name, $last_name, $address;
    public $updateMode = false;
 
    public function render()
    {
        $this->users = User::all();
        return view('livewire.users');
    }
 
    private function resetInputFields(){
        $this->first_name = '';
        $this->last_name = '';
        $this->address = '';
    }
 
    public function store()
    {
        $validatedDate = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
        ]);
 
        user::create($validatedDate);
 
        session()->flash('message', 'users Created Successfully.');
 
        $this->resetInputFields();
 
    }
 
    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->address = $user->address;
        
    }
 
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
 
 
    }
 
    public function update()
    {
        $validatedDate = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
        ]);
 
        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'address' => $this->address,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'user Updated Successfully.');
            $this->resetInputFields();
 
        }
    }
 
    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'user Deleted Successfully.');
        }
    }
}

