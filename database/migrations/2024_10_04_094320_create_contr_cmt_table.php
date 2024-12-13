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
        Schema::create('contr_cmt', function (Blueprint $table) {
            $table->foreignId('contr_id')->constrained('contr_dat', 'contr_id');
            $table->id('cmt_id');
            $table->date('wrt_tm')->nullable();
            $table->string('wrt_by');
            $table->text('cmt_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contr_cmt');
    }
};
