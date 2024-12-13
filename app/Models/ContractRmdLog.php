<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractRmdLog extends Model
{
    use HasFactory;

    protected $table = 'contr_rmd_log';

    protected $primaryKey  = 'log_id';


    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contr_id', 'contr_id');
    }
}
