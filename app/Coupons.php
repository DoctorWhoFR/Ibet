<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $fillable = [
        'code', 'reduction'
    ];
}
