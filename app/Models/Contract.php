<?php

namespace App\Models;

use App\Models\DocTy;
use App\Models\DocIsu;
use App\Models\CpartTy;
use App\Models\DocSubty;
use App\Models\ContractHist;
use App\Models\ContractStat;
use Database\Factories\ContractFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Imports\ContractImport;

class Contract extends Model
{
    use HasFactory;

    protected $guarded = ['contr_id'];

    protected $primaryKey = 'contr_id';

    protected $table = 'contr_dat';

    // protected $foreignKey = ['doc_isu_cd',];

    public function docIsu()
    {
        return $this->belongsTo(DocIsu::class, 'doc_isu_cd', 'doc_isu_cd');
    }

    public function docTy()
    {
        return $this->belongsTo(DocTy::class, 'doc_ty_cd', 'doc_ty_cd');
    }

    public function docSubty()
    {
        return $this->belongsTo(DocSubty::class, 'doc_subty_cd', 'doc_subty_cd');
    }

    public function cpartTy()
    {
        return $this->belongsTo(CpartTy::class, 'cpart_ty_cd', 'cpart_ty_cd');
    }

    public function contrStat()
    {
        return $this->belongsTo(ContractStat::class, 'contr_stat_cd', 'contr_stat_cd');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'id', 'unit_head');
    }

    public function contrHist()
    {
        return $this->hashMany(ContractHIst::class, 'contr_id', 'contr_id');
    }

    public function contrAttc()
    {
        return $this->hasMany(ContractAttc::class, 'contr_id', 'contr_id');
    }

    public function contrCmt()
    {
        return $this->hasMany(ContractCmt::class, 'contr_id', 'contr_id');
    }

    public function contrRmdLog()
    {
        return $this->hasMany(ContractRmdLog::class, 'contr_id', 'contr_id');
    }

    public function contrApv()
    {
        return $this->hasMany(ContrApv::class, 'contr_id', 'contr_id');
    }

}
