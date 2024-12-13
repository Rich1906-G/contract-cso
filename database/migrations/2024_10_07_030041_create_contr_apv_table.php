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
        Schema::create('contr_apv', function (Blueprint $table) {
            $table->id('seq_no');
            $table->foreignId('contr_id')->constrained('contr_dat', 'contr_id');
            $table->string('seq_cd');
            $table->string('seq_pos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contr_apv');
    }
};
