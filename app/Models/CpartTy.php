<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CpartTy extends Model
{
    use HasFactory;

    protected $table = 'mst_cpart_ty';

    protected $primaryKey = 'cpart_ty_cd';

    protected $incremanting = false;

    protected $keyType = 'string';

    public function contract()
    {
        return $this->hashMany(Contract::class, 'cpart_ty_cd', 'cpart_ty_cd');
    }
}
