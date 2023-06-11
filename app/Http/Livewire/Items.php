<?php

namespace App\Http\Livewire;


use App\Models\Item;
use App\Models\ItemsGroup;
use Livewire\Component;

class Items extends Component
{
    public $itemsGroups;
    public $itemName,$groupId,$itemId;
    public $isUpdating = false;

    protected $rules = [
        'itemName' => 'required',
        'groupId' => 'required',
    ];

    protected $listeners = [
        'destroy'
    ];

    /**
     * @return void
     */
    public function resetFields(): void{
        $this->isUpdating = false;
        $this->itemName = '';
        $this->groupId = '';
    }
    public function mount():void
    {
        $this->loadItemGroups();
    }

    public function loadItemGroups(): void
    {
        $this->itemsGroups = ItemsGroup::with('items')->get();
    }

    public function createItem():void
    {
        try {
            $this->validate();

            Item::create([
                'item_name' => $this->itemName,
                'items_group_id' => $this->groupId,
            ]);

            $this->resetFields();

            $this->loadItemGroups();
            session()->flash('success', 'Item created successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Error creating item: ' . $e->getMessage());
        }
    }
    public function edit($id):void
    {
        $Item = Item::findOrFail($id);
        $this->isUpdating = true;
        $this->itemId = $Item->id;
        $this->itemName = $Item->item_name;
    }

    public function updateItem():void
    {
        $this->validate();

        try{

            Item::find($this->itemId)->fill([
                'item_name'=>$this->itemName,
                'items_group_id'=>$this->groupId
            ])->save();

            session()->flash('success','Item Updated Successfully!!');

            $this->resetFields();
            $this->loadItemGroups();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating Item!! '. $e->getMessage());
            $this->resetFields();
        }
    }

    public function destroy($id):void
    {
        try{
            Item::find($id)->delete();
            session()->flash('success',"Item Deleted Successfully!!");
            $this->loadItemGroups();
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Item!! ".$e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.items');
    }

}
