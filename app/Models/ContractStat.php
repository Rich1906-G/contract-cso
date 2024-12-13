<?php

namespace App\Models;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContractStat extends Model
{
    use HasFactory;

    protected $table = 'mst_contr_stat';

    protected $primaryKey = 'contr_stat_cd';

    protected $keyType = 'string';

    public $incrementing = false;

    public function contract()
    {
        $this->hasMany(Contract::class, 'contr_stat_cd', 'contr_stat_cd');
    }
}
