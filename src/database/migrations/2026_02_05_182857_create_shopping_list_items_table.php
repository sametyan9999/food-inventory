<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingListItemsTable extends Migration
{
    public function up(): void
    {
        Schema::create('shopping_list_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('item_id')->constrained()->cascadeOnDelete();
            $table->boolean('purchased')->default(false);
            $table->timestamps();

            $table->unique(['user_id', 'item_id', 'purchased']);
            $table->index(['user_id', 'purchased']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shopping_list_items');
    }
}