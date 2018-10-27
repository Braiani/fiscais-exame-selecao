<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalProva extends Model
{
    public function exames()
    {
        return $this->belongsToMany('App\Exame', 'exame_local');
    }
}
