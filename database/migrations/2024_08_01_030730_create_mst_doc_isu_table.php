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
        Schema::create('mst_doc_isu', function (Blueprint $table) {
            $table->char('doc_isu_cd', 10)->primary();
            $table->string('doc_isu_nm');
            $table->integer('doc_isu_ord');
            $table->string('doc_isu_val');
            $table->text('doc_isu_desc')->nullable();
            $table->string('cre_by');
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
        Schema::dropIfExists('mst_doc_isu');
    }
};
