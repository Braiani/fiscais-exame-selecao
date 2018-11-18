<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidatoExame extends Model
{
    protected $table = 'candidato_exame';
    
    public function candidato()
    {
        return $this->belongsTo('App\Candidato');
    }
    
    public function exame()
    {
        return $this->belongsTo('App\Exame');
    }
}
