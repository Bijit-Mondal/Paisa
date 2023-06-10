<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('items_groups', function (Blueprint $table) {
            $table->id();
            $table->string('items_group');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items_groups');
    }
};
