<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocIsu extends Model
{
    use HasFactory;

    protected $table = 'mst_doc_isu';

    protected $primaryKey = 'doc_isu_cd';

    protected $keyType  = 'string';

    public $incremanting = false;

    protected $fillable = ['doc_isu_cd', 'doc_isu_nm', 'doc_isu_ord', 'doc_isu_val', 'cre_by', 'cre_tm'];
    // protected $guarded = [];

    public function contract()
    {
        return $this->hashMany(Contract::class, 'doc_isu_cd', 'doc_isu_cd');
    }
    
}
