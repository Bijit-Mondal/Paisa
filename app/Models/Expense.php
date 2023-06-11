<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public function itemGroup()
    {
        return $this->belongsTo(ItemsGroup::class, 'items_group_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = ['expense', 'items_group_id', 'item_id', 'user_id'];
}
