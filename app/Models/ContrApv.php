<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContrApv extends Model
{
    use HasFactory;

    protected $table = 'seq_no';

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contr_id', 'contr_id');
    }
}
