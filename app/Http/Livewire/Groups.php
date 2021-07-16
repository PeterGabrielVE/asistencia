<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Group;

class Groups extends Component
{
    public $groups, $id_group_parent;
    public $updateGroup = false;

    protected $listeners = [
        'deleteGroup'=>'destroy'
    ];

     // Validation Rules
    protected $rules = [
        'group'=>'required',
    ];


    public function render()
    {   
        $this->groups = Group::select('id','group')->get();
        return view('livewire.group.group');
    }

    public function resetFields(){
        $this->group= '';
    }

    public function store(){

        // Validate Form Request
        $this->validate();

        try{
            // Create Category
            Group::create([
                'group'=>$this->group,
            ]);
    
            // Set Flash Message
            session()->flash('success','Category Created Successfully!!');

            // Reset Form Fields After Creating Category
            $this->resetFields();
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating category!!');

            // Reset Form Fields After Creating Category
            $this->resetFields();
        }
    }
}
