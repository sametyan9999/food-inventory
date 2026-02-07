<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'in_stock',
        'expires_at',
        'note',
    ];

    protected $casts = [
        'in_stock' => 'boolean',
        'expires_at' => 'date',
    ];

    public function shoppingListItems()
    {
        return $this->hasMany(ShoppingListItem::class);
    }
}