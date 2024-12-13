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
        Schema::create('mst_contr_stat', function (Blueprint $table) {
            $table->string('contr_stat_cd', 10)->primary();
            $table->string('contr_stat_nm');
            $table->string('contr_stat_ord');
            $table->string('contr_stat_desc')->nullable();
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
        Schema::dropIfExists('mst_contr_stat');
    }
};
