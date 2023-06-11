<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expense;

class ExpenseSeeder extends Seeder
{
    public function run()
    {
        $user = \Auth::user();

        try {
            Expense::create([
                'expense_name' => 'Example Expense',
                'expense' => 100.00,
                'items_group_id' => 1, // Replace with the desired group ID
                'item_id' => 1, // Replace with the desired item ID
                'user_id' => $user->id,
            ]);

            // Add more Expense::create() statements for additional seed data if needed

            $this->command->info('Expense seeders created successfully.');
        } catch (\Exception $e) {
            $this->command->error('Failed to create expense seeders.');
        }
    }
}
