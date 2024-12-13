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
        Schema::create('contr_rmd_log', function (Blueprint $table) {
            $table->foreignId('contr_id')->constrained('contr_dat', 'contr_id')->onDelete('cascade')->onUpdate('cascade');
            $table->id('log_id');
            $table->text('eml_to');
            $table->text('eml_subj');
            $table->text('eml_msg');
            $table->date('send_dt')->nullable();
            $table->date('send_tm')->nullable();
            $table->string('sent_fg')->nullable();
            $table->text('err_msg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contr_rmd_log');
    }
};
