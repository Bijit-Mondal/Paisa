<?php

namespace Tests\Unit;
use App\Models\Expense;
use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class createExpenseTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreateExpense(): void
    {
        $role = Role::factory()->create(); // Create a new role instance
        $user = User::factory()->create(['role_id' => $role->id]); // Assign the role to the user

        try {
            Expense::create([
                'expense_name' => 'Mouse',
                'expense' => 500,
                'items_group_id' => 8,
                'item_id' => 3,
                'user_id' => $user->id,
            ]);
            session()->flash('success', 'Expense created successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create expense.');
        }

        // Add assertions here to validate the creation of the expense
    }
}
