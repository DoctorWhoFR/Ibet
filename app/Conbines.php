<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conbines extends Model
{
    //
    protected $fillable = [
        'titre', 'analyse'
    ];

    public function pronostiques(){
        return $this->hasMany(Pronostiques::class, 'conbines_id');
    }
}
