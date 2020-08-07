<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pronostiques extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'type', 'date_debut', 'date_fin', 'pronostique', 'analyse', 'equipe_defence', 'conbines_id', 'equipe_attack', 'cote_moyen', 'status', 'confiance', 'final_equipedefence_score', 'final_equipeattack_score'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];


}
