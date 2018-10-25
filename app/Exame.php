<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Exame extends Model
{

    public function scopeFormularioAtivo($query)
    {
        return $query->whereDate('vencimento_formulario', '>', Carbon::now());
    }

    public function localProva()
    {
        return $this->hasMany('App\LocalProva');
    }
}
