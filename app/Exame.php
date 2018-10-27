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

    public function localProva()
    {
        return $this->belongsToMany('App\LocalProva', 'exame_local');
    }
}
