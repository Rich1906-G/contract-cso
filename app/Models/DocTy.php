<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocTy extends Model
{
    use HasFactory;
    protected $table = 'mst_doc_ty';

    protected $primaryKey = 'doc_ty_cd';

    protected $keyType = 'string';

    protected $incremanting = false;

    protected $fillable = ['doc_ty_cd', 'doc_ty_nm', 'doc_ty_ord', 'cre_by', 'cre_tm'];

    public function Contract()
    {
        return $this->hashMany(Controller::class, 'doc_ty_cd', 'doc_ty_cd');
    }
    // protected $guared = [];
}
