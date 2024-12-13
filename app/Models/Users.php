<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Users extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    protected $table = 'users';

    // protected function type()
    // {
    //     return new Attribute(
    //         get: fn($value) =>  $value == 2 ? "user" : "admin",
    //     );
    // }

    public function contract()
    {
        $this->hasMany(Contract::class, 'unit_head', 'id');
    }
}
