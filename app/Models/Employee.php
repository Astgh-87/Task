<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = [];

    public function companies(): HasOne
    {
        return $this->hasOne(Company::class, 'id','company');
    }
}
