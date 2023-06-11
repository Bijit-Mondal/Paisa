<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsGroup extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'items_group_id');
    }

    protected $fillable = [
        'items_group'
    ];

    public $timestamps = true;
}
