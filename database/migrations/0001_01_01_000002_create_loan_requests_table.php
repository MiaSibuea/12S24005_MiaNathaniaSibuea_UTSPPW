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
        Schema::create('loan_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id');
            $table->string('borrow_name', 100);
            $table->string('borrow_nim', 10);
            $table->string('borrow_email', 100);
            $table->text('specification');
            $table->date('loan');
            $table->date('expected_return_date');
            $table->text('purpose');
            $table->enum('status', ['diajukan', 'disetujui', 'ditolak', 'selesai'])->default('tdiajukan');
            $table->integer ('total_estimated_fee');
            $table->timestamps();  //hasil kalkulasi otomatis selisih hari dikali tarif harian (tidak mengerti)
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_request');
    }
};
