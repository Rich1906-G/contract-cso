<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractAttc extends Model
{
    use HasFactory;

    protected $table = 'contr_attc';

    protected $primaryKey = 'file_nm';

    protected $keyType = 'string';

    protected $incremanting = false;

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contr_id', 'contr_id');
    }
}
