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
        Schema::create('contr_attc', function (Blueprint $table) {
            $table->string('file_nm')->primary();
            $table->foreignId('contr_id')->constrained('contr_dat', 'contr_id');
            $table->string('attc_sdir');
            $table->text('file_desc')->nullable();
            $table->text('file_sz')->nullable();
            $table->string('lock_fg')->nullable();
            $table->string(column: 'cre_by');
            $table->date('cre_tm');
            $table->string('upd_by')->nullable();
            $table->date('upd_tm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contr_attc');
    }
};
