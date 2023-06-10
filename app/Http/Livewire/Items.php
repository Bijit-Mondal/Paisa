<?php

namespace App\Http\Livewire;


use App\Models\Item;
use App\Models\ItemsGroup;
use Livewire\Component;

class Items extends Component
{
    public $itemGroups;
    public $itemName,$groupId;
    public $isUpdating = false;
    /**
     * @return void
     */
    public function resetFields(){
        $this->isUpdating = false;
        $this->itemName = '';
        $this->groupId = '';
    }
    public function mount()
    {
        $this->loadItemGroups();
    }

    public function loadItemGroups(): void
    {
        $this->itemGroups = ItemsGroup::with('items')->get();
    }

    public function createItem()
    {
        try {
            // Validate the input if needed

            // Create a new item
            Item::create([
                'item_name' => $this->itemName,
                'items_group_id' => $this->groupId,
            ]);

            // Clear the input value
            $this->resetFields();

            // Reload the item groups
            $this->loadItemGroups();

            session()->flash('success', 'Item created successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Error creating item: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.items');
    }

}
