<?php

namespace App\Http\Livewire\Group;

use Livewire\Component;
use App\Models\Group;

class GroupComponent extends Component
{
    public $group,$groups,$id_group_parent;
    public $updateGroup = false;

    public function render()
    {
        $this->groups = Group::select('id','group')->get();
        return view('livewire.group.group-component');
    }

    protected $rules = [
        'group'=>'required',
    ];

    public function resetFields(){
        $this->group= '';
    }

    public function store2(){

        // Validate Form Request
        //$this->validate();
        $this->emit('modal_close');
        
    }
}
