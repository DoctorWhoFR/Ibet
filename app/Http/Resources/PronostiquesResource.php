<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PronostiquesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'pronostique' => $this->pronostique,
            'equipe_defence' => $this->equipe_defence,
            'equipe_attack' => $this->equipe_attack,
            'cote_moyen' => $this->cote_moyen,
            'status' => $this->status,
            'confiance' => $this->confiance,
            'final_equipedefence_score' => $this->final_equipedefence_score,
            'final_equipeattack_score' => $this->final_equipeattack_score,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
