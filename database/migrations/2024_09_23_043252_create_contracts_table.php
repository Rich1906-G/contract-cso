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
        Schema::create('contr_dat', function (Blueprint $table) {
            $table->id('contr_id')->nullable();
            $table->string('doc_nm', length: 255)->nullable();
            $table->string('doc_ty_cd', 10)->nullable();
            $table->foreign('doc_ty_cd')->references('doc_ty_cd')->on('mst_doc_ty')->onDelete('cascade')->onUpdate('cascade');
            $table->string('revw_by', length: 255)->nullable();
            $table->text('cpart_pic_lst')->nullable();
            $table->char('doc_isu_cd', 10)->nullable();
            $table->foreign('doc_isu_cd')->references('doc_isu_cd')->on('mst_doc_isu')->onDelete('cascade')->onUpdate('cascade');
            $table->date('revw_on')->nullable();
            $table->string('cpart_doc_no', length: 255)->nullable();
            $table->string('cbn_doc_no', length: 255)->nullable();
            $table->date('doc_dt')->nullable();
            $table->string('doc_desc', length: 255)->nullable();
            $table->string('cbn_signer', length: 255)->nullable();
            $table->string('cpart_signer', length: 255)->nullable();
            $table->string('doc_subty_cd', 10)->nullable();
            $table->foreign('doc_subty_cd')->references('doc_subty_cd')->on('mst_doc_subty')->onDelete('cascade')->onUpdate('cascade');
            $table->text('notes')->nullable();
            $table->string('cpart_cd', length: 12)->nullable();
            $table->string('cpart_ty_cd', 10)->nullable();
            $table->foreign('cpart_ty_cd')->references('cpart_ty_cd')->on('mst_cpart_ty')->onDelete('cascade')->onUpdate('cascade');
            $table->text('cbn_pic_lst')->nullable();
            $table->text('acknow_lst')->nullable();
            $table->string('for_rmd_lst', length: 250)->nullable();
            $table->date('eff_dt')->nullable();
            $table->date('exp_dt')->nullable();
            $table->string('contr_stat_cd', 10)->nullable();
            $table->foreign('contr_stat_cd')->references('contr_stat_cd')->on('mst_contr_stat')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('auto_rov_fg')->nullable();
            $table->date('ntf_upd_dt')->nullable();
            $table->date('ntf_ext_note_dt')->nullable();
            $table->date('ntf_exp_note_dt')->nullable();
            $table->string('file_loc', length: 35)->nullable();
            $table->string('cust_id')->nullable();
            $table->boolean('any_penalty_fg')->nullable();
            $table->string('cre_by', length: 5)->nullable();
            $table->date('cre_tm')->nullable();
            $table->string('upd_by', length: 5)->nullable();
            $table->date('upd_tm')->nullable();
            $table->date('doc_stat_dt')->nullable();
            $table->smallInteger('doc_stat_cd')->nullable();
            $table->string('branch')->nullable();
            $table->string('nameuser')->nullable();
            $table->string('cae')->nullable();
            $table->string('unit_head')->nullable();
            $table->foreignId('unit_head_id')->constrained(
                table: 'users',
                indexName: 'contr_dad_unit_head_id'
            );
            $table->string('serv_ty')->nullable();
            $table->string('contr_period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
