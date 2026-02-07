<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingListItem extends Model
{
    protected $fillable = [
        'user_id',
        'item_id',
        'purchased',
    ];

    protected $casts = [
        'purchased' => 'boolean',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}