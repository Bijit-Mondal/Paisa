<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('items-group', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->foreignId('items_group_id')->constrained('items_groups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items-group');
    }
};
