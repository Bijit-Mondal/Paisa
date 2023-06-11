<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use App\Models\ItemsGroup;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Expenses extends Component
{
    public $expenses, $itemsGroups,$expenseId;
    public $expense, $groupId, $itemId;
    public $isUpdating = false;
    protected $rules = [
        'expense' => 'required',
        'groupId' => 'required',
        'itemId' => 'required',
    ];

    protected $listeners = [
        'destroy'
    ];

    public function resetFields():void
    {
        $this->isUpdating = false;
        $this->expense = '';
        $this->groupId = '';
        $this->itemId = '';
    }

    public function mount():void
    {
        $this->loadExpenses();
    }

    public function loadExpenses():void
    {
        $user = Auth::user();
        $this->expenses = Expense::where('user_id', $user->id)->get();
        $this->itemsGroups = ItemsGroup::select('id', 'items_group')->with('items')->get();
    }

    public function editExpense($expenseId):void
    {
        $this->expenseId = $expenseId;
        $expenses = Expense::findOrFail($expenseId);
        $this->isUpdating = true;
        $this->expense = $expenses->expense;
        $this->groupId = $expenses->items_group_id;
        $this->itemId = $expenses->item_id;
    }

    public function createExpense($userId):void
    {
        try {
            $this->validate();

            Expense::create([
                'expense' => $this->expense,
                'items_group_id' => $this->groupId,
                'item_id' => $this->itemId,
                'user_id' => $userId,
            ]);

            $this->resetFields();

            $this->loadExpenses();

            session()->flash('success', 'Expense created successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create expense. '.$e->getMessage());
        }
    }

    public function destroy($expenseId)
    {
        $expense = Expense::findOrFail($expenseId);

        if ($expense->user_id === Auth::id()) {
            $expense->delete();
            session()->flash('success', 'Expense deleted successfully.');
        } else {
            session()->flash('error', 'You are not authorized to delete this expense.');
        }

        $this->loadExpenses();
    }




    public function updateExpense(): void
    {
        try {
            $this->validate();

            Expense::find($this->expenseId)->fill([
                'expense' => $this->expense,
                'items_group_id' => $this->groupId,
                'item_id' => $this->itemId,
            ])->save();

            $this->resetFields();

            $this->isUpdating = false;

            $this->loadExpenses();

            session()->flash('success', 'Expense updated successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update expense. ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.expense');
    }
}
