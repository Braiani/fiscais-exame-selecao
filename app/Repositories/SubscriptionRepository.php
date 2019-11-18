<?php

namespace App\Repositories;


use App\Candidato;

class SubscriptionRepository extends BaseRepository
{
    public function model()
    {
        return Candidato::class;
    }
}
