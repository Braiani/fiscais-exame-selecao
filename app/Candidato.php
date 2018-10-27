<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    use SoftDeletes;


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $guarded = [];


    /**
     * Relationship with Exame table
     *
     * @return relationship
     **/
    public function exames()
    {
        return $this->belongsToMany('App\Exame')->withPivot('local_prova_id')->withTimestamps();
    }
}
