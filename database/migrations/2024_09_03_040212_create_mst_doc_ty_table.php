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
        Schema::create('mst_doc_ty', function (Blueprint $table) {
            $table->char('doc_ty_cd', 10)->primary();
            $table->string('doc_ty_nm');
            $table->integer('doc_ty_ord');
            $table->char('doc_ty_desc')->nullable();
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
        Schema::dropIfExists('mst_doc_ty');
    }
};
