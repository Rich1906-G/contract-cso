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
        Schema::create('contr_hist_head', function (Blueprint $table) {
            $table->foreignId('contr_id')->constrained('contr_dat', 'contr_id');
            $table->id('hist_id');
            $table->date('hist_tm')->nullable();
            $table->string('act_cy');
            $table->string('src_nm');
            $table->string('proc_nm');
            $table->text('ip_addr');
            $table->string('hist_subj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contr_hist_head');
    }
};
