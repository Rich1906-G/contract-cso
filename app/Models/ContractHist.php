<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractHist extends Model
{
    use HasFactory;

    protected $table = 'contr_hist_head';

    protected $primaryKey = 'hist_id';

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contr_id', 'contr_id');
    }
}
