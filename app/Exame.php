<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Exame extends Model
{
    protected $guarded = [];

    public function scopeFormularioAtivo($query)
    {
        return $query->whereDate('vencimento_formulario', '>', Carbon::now());
    }

    /**
     * Relationship with Local_prova table
     *
     * @return relationship
     **/
    public function localProva()
    {
        return $this->belongsToMany('App\LocalProva', 'exame_local');
    }

    /**
     * Relationship with Candidato table
     *
     * @return relationship
     **/
    public function candidatos()
    {
        return $this->belongsToMany('App\Candidato');
    }
}
