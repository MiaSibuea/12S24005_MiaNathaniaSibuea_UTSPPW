<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->varchar('name', 100)->unique();
            $table->varchar('code', 10)->unique(); // di modul mengatakan misalnya: 'IOT', 'SRV', 'DRN'
            //'created_at', 'updated_at' (text kah?)
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};