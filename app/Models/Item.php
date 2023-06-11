<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model{
    use HasFactory;

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'item_id');
    }
    public function itemsGroup(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ItemsGroup::class);
    }
    protected $fillable = [
        'item_name',
        'items_group_id',
    ];
    public $timestamps = true;
}
