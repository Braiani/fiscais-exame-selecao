<?php

namespace App\Repositories;


use App\Exame;

class ExameRepository extends BaseRepository
{
    public function model()
    {
        return Exame::class;
    }

    public function activeForm()
    {
        return $this->model->formularioAtivo()->latest()->first();
    }
}
