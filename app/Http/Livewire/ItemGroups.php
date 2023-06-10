<?php

namespace App\Http\Livewire;

use App\Models\ItemsGroup;
use Livewire\Component;

class ItemGroups extends Component
{
    public $items_group,$Group_id,$itemsGroups;
    public $isUpdating = false;
    protected $rules = [
        'items_group'=>'required',
    ];

    protected $listeners = [
        'destroy'
    ];

    public function render()
    {
        $this->itemsGroups = ItemsGroup::select('id','items_group')->get();
        return view('livewire.itemgroups');
    }

    public function resetFields(){
        $this->isUpdating = false;
        $this->Group_id = '';
        $this->items_group = '';
    }
    public function edit($id){
        $Group = ItemsGroup::findOrFail($id);
        $this->items_group = $Group->items_group;
        $this->Group_id = $Group->id;
        $this->isUpdating = true;
    }

    public function destroy($id){
        try{
            ItemsGroup::find($id)->delete();
            session()->flash('success',"Group Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Group!!");
        }
    }

    public function update(){
        $this->validate();

        try{
            ItemsGroup::find($this->Group_id)->fill([
                'items_group' => $this->items_group
            ])->save();
            session()->flash('success','Group Updated Successfully!!');
            $this->resetFields();
        }catch (\Exception $e){
            session()->flash('error','Group goes wrong while updating Note!!');
            $this->resetFields();
        }
    }

    public function create(){

        $this->validate();

        try{
            ItemsGroup::create([
                'items_group'=>$this->items_group,
            ]);

            session()->flash('success','Group Created Successfully!!');

            $this->resetFields();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while creating Group!!');

            $this->resetFields();
        }
    }
}
