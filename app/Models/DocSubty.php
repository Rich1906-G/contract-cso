<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocSubty extends Model
{
    use HasFactory;

    protected $table = 'mst_doc_subty';

    protected $primaryKey = 'doc_subty_cd';

    protected $keyType = 'string';

    protected $incremanting = false;

    public function contract()
    {
        return $this->hashMany(Contract::class, 'doc_subty_cd', 'doc_subty_cd');
    }
}
