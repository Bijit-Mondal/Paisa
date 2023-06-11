<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use App\Models\ItemsGroup;
use Livewire\Component;

class AdminExpense extends Component
{
    public $expenses, $itemsGroups;
    public function mount():void
    {
        $this->loadExpenses();
    }

    public function loadExpenses():void
    {
        $this->expenses = Expense::all();;
        $this->itemsGroups = ItemsGroup::select('id', 'items_group')->with('items')->get();
    }
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.admin-expense');
    }
}
