<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractCmt extends Model
{
    use HasFactory;

    protected $table = 'contr_cmt';

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contr_id', 'contr_id');
    }
}
