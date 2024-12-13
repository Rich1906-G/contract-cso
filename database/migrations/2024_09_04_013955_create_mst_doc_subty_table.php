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
        Schema::create('mst_doc_subty', function (Blueprint $table) {
            $table->string('doc_subty_cd', 10)->primary();
            $table->string('doc_subty_nm');
            $table->string('doc_subty_ord');
            $table->string('doc_subty_desc')->nullable();
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
        Schema::dropIfExists('mst_doc_subty');
    }
};
