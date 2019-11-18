<?php

namespace App\Repositories;


use App\Banco;

class BankRepository extends BaseRepository
{
    public function model()
    {
        return Banco::class;
    }

    public function findBy($search = null)
    {
        if ($search) {
            return $this->model
                        ->where("nome", "LIKE", "%{$search}%")
                        ->orWhere('cod_banco', 'LIKE', "%{$search}%")
                        ->paginate();
        }
        return $this->model->paginate();
    }

    public function findById(int $id)
    {
        return $this->model->find($id);
    }
}
