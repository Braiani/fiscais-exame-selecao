<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banco;
use App\Exame;
use App\Candidato;
use App\Http\Requests\FormRequestValidation;

class HomeController extends Controller
{
    public function index()
    {
        $bancos = Banco::orderBy('cod_banco', 'asc')->get();
        $exame = Exame::formularioAtivo()->latest()->first();
        return view('welcome')->with([
            'bancos' => $bancos,
            'exame' => $exame
            ]);
    }

    public function store(FormRequestValidation $request)
    {
        return $request;
    }

    public function buscar(Request $request)
    {
        if (Candidato::where('cpf', $request->cpf)->count() > 0) {
            return Candidato::where('cpf', $request->cpf)->first();
        }else{
            return ['error' => 1];
        }
    }
}
